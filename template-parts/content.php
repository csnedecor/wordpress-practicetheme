<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bootstrap_to_WordPress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="post-details">
        <i class="fa fa-user"></i> <?php the_author(); ?>
        <i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
        <i class="fa fa-folder"></i> <?php the_category(", "); ?> <!--list the categories separated by a comma. -->
        <i class="fa fa-tags"></i> <?php the_tags(); ?> <!-- list the tags -->

        <div class="post-comments-badge">

        	<!-- comments_number syntax: comments_number($zero, $one, $more) where $zero is what you want to display if there are 0 comments. Default values are $zero: "No Comments", $one: "One Comment", $more: "X Comments" -->
          <a href=""><i class="fa fa-comments"></i> <?php comments_number( 0, 1, "%"); ?><!-- percent sign pulls in the number of comments --></a>
        </div><!-- post-comments-badge -->
      </div><!-- post-details -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bootstrap2wordpress' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bootstrap2wordpress' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php bootstrap2wordpress_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
