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
          <a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number( 0, 1, "%"); ?><!-- percent sign pulls in the number of comments --></a>
        </div><!-- post-comments-badge -->

        <!-- Add link to allow author to edit from page. Syntax:  edit_post_link($text, $before_text, $after_text)-->
        <div><?php edit_post_link("Edit", "<div><i class='fa fa-pencil'></i>", "</div>"); ?></div>
      </div><!-- post-details -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() ) { //check for featured image?>
	  <div class="post-image">
	    <?php the_post_thumbnail(); ?>
	  </div><!-- post-image -->
	<?php } ?>
  <div class="post-excerpt">
    <?php the_excerpt(); ?>
  </div><!-- post-excerpt -->
</article><!-- #post-## -->
