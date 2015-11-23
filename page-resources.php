<?php
// Template Name: Resources

get_header();

$thumbnail_url    = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
?>

<!-- FEATURE IMAGE
================================================== -->
<?php if( has_post_thumbnail() ) { ?> <!-- check for feature image -->
  <section class="feature-image" style="background: url('<?php echo $thumbnail_url ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
    <h1><?php the_title(); ?></h1>
  </section>
<?php } else { ?>
  <section class="feature-image feature-image-default" data-type="background" data-speed="2">
    <h1><?php the_title(); ?></h1>
  </section>
<?php } ?>


  <!-- MAIN CONTENT
================================================== -->
<div class="container">
  <div class="row" id="primary">

    <div id="content" class="col-sm-12">

      <section class="main-content">
        <?php while( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>

        <hr>

        <div class="resource-row clearfix">
          <div class="resource">
            <img src="assets/img/justhost-logo.jpg" alt="Justhost">
            <h3><a href="http://bradhussey.ca/justhost">Justhost</a></h3>
            <p>When I made my very first website about 7 years ago, I signed up with Justhost &mdash; and I&rsquo;ve never looked back! Since then, I&rsquo;ve built hundreds of websites with Justhost as my only hosting provider. I recommend these guys to all of my clients, my students, my family and friends.</p>
            <p>If you&rsquo;re looking to start your very first website, or are looking for a reliable hosting provider &mdash; look no further. You get a free domain name for life, great customer service, unlimited domains, unlimited email accounts, unlimited GBs of space, an anytime money back guarantee and my favourite part: You can set up a blog website in minutes with 1-click WordPress Install. These guys are awesome! Get started with Justhost.</p>
            <a href="http://bradhussey.ca/justhost" class="btn btn-success">Get started with Justhost</a>
          </div>
          <div class="resource">
            <img src="assets/img/coda2-logo.jpg" alt="Coda 2">
            <h3><a href="http://bradhussey.ca/coda2">Coda 2</a></h3>
            <p>If you&rsquo;re serious about coding, or you want to start out with a solid tool to code with, I strongly recommend Coda 2 for Mac. A beautiful User Interface with tabbed navigation, a super sidebar, and a simple layout. The features are outrageous and extensive, with code folding, smart complete, auto indentation, GIT integration, a built-in terminal, iCloud support &mdash; to name a few. The features seem to be endless.</p>
            <p>I use Coda 2 for all of my courses &amp; tutorials, and if you decide to use Coda 2 as your editor of choice, it would greatly benefit you when taking my courses. The price of the editor weighs in at $75, but it&rsquo;s worth every penny &mdash; in my honest opinion.</p>
            <a href="http://bradhussey.ca/coda2" class="btn btn-success">Check out Coda 2</a>
          </div>
          <div class="resource">
            <img src="assets/img/dropbox-logo.jpg" alt="Dropbox">
            <h3><a href="http://bradhussey.ca/getdropbox">Dropbox</a></h3>
            <p>This tool should go without saying. But if I have to explain &mdash; you <strong>need</strong> this tool. I use it 24/7 &mdash; literally. Dropbox is where I store my personal &amp; business related data. It's accessible anywhere, and regularly backs up my important information.</p>
            <p>Because my data is accessible anywhere, Dropbox allows me to work on a client project at home, on the bus, in a coffee shop, or at a friend's house. It's truly a gem of a tool, and I think you'll believe me.</p>
            <a href="http://bradhussey.ca/getdropbox" class="btn btn-success">Try Dropbox for free</a>
          </div>
        </div>
      </section>

    </div><!-- content -->

  </div><!-- primary -->
</div><!-- container -->

<?php get_footer(); ?>
