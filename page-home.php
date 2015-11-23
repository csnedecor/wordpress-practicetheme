<?php
/*
  Template Name: Home Page
 */

$instructor_section_title = get_field('instructor_section_title');
$instructor_name          = get_field('instructor_name');
$bio_excerpt              = get_field('bio_excerpt');
$full_bio                 = get_field('full_bio');
$twitter_username         = get_field('twitter_username');
$facebook_username        = get_field('facebook_username');
$google_plus_username     = get_field('google_plus_username');
$num_students             = get_field('num_students');
$num_reviews              = get_field('num_reviews');
$num_courses              = get_field('num_courses');


get_header(); ?>

  <?php get_template_part( 'template-parts/content', 'hero'); ?>

  <?php get_template_part( 'template-parts/content', 'optin'); ?>

  <?php get_template_part( 'template-parts/content', 'boost'); ?>

  <?php get_template_part( 'template-parts/content', 'who'); ?>

  <?php get_template_part( 'template-parts/content', 'course-features'); ?>

  <?php get_template_part( 'template-parts/content', 'project-features'); ?>

  <?php get_template_part( 'template-parts/content', 'video-featurette'); ?>

  <?php get_template_part( 'template-parts/content', 'instructor' ); ?>

  <!-- TESTIMONIALS -->
  <!-- Use custom post types with title, entry and featured image -->
  <section id="kudos">
    <div class="container">
      <div class="row">

        <div class="col-sm-8 col-sm-offset-2">
          <h2>What People Are Saying About Brad</h2>

          <?php $loop = new WP_Query( array( 'post_type' => 'testimonial', 'order_by' => 'post_id', 'order' => 'ASC')); ?>

          <?php while($loop->have_posts()) : $loop->the_post(); ?>
            <!-- TESTIMONIAL -->
            <div class="row testimonial">
              <div class="col-sm-4">
                <?php
                  if (has_post_thumbnail()){ //check for featured image
                    the_post_thumbnail(array(200, 200)); //crop image to 200X200px
                  }
                ?>
              </div><!-- end col -->
              <div class="col-sm-8">
                <blockquote>
                  <?php the_content(); ?>
                  <cite>&mdash; <?php the_title(); ?></cite>
                </blockquote>
              </div><!-- end col -->
            </div><!-- row -->
          <?php endwhile; wp_reset_query(); ?>

        </div><!-- end col -->

      </div><!-- row -->
    </div><!-- container -->
  </section><!-- kudos -->
<?php get_footer(); ?>
