<?php
/*
  Template Name: Home Page
 */

$video_featurette_title   = get_field('video_featurette_title');
$video_featurette_video   = get_field('video_featurette_youtube_video');

$instructor_section_title = get_field('instructor_section_title');
$instructor_name = get_field('instructor_name');
$bio_excerpt = get_field('bio_excerpt');
$full_bio = get_field('full_bio');
$twitter_username = get_field('twitter_username');
$facebook_username = get_field('facebook_username');
$google_plus_username = get_field('google_plus_username');
$num_students = get_field('num_students');
$num_reviews = get_field('num_reviews');
$num_courses = get_field('num_courses');


get_header(); ?>

  <?php get_template_part( 'template-parts/content', 'hero'); ?>

  <?php get_template_part( 'template-parts/content', 'optin'); ?>

  <?php get_template_part( 'template-parts/content', 'boost'); ?>

  <?php get_template_part( 'template-parts/content', 'who'); ?>

  <?php get_template_part( 'template-parts/content', 'course-features'); ?>

  <?php get_template_part( 'template-parts/content', 'project-features'); ?>

  <!-- VIDEO FEATURETTE -->
  <section id="featurette">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <h2><?php echo $video_featurette_title ?></h2>
          <iframe width="100%" height="415" src="<?php echo $video_featurette_video ?>" frameborder="0" allowfullscreen></iframe>
        </div><!-- end col -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- featurette -->

  <!-- INSTRUCTOR -->
  <!-- Used Advanced custom fields for instructor section -->
  <section id="instructor">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-6">
          <div class="row">
            <div class="col-lg-8">
              <h2><?php echo $instructor_section_title; ?> <small><?php echo $instructor_name; ?></small></h2>
            </div><!-- col -->
            <div class="col-lg-4">
              <?php if( !empty($twitter_username) ) : ?>
                <a href="https://twitter.com/<?php echo $twitter_username ?>" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
              <?php endif; ?>
              <?php if( !empty($facebook_username) ) : ?>
                <a href="https://facebook.com/<?php echo $facebook_username ?>" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
              <?php endif; ?>
              <?php if( !empty($google_plus_username) ) : ?>
                <a href="https://plus.google.com/<?php echo $google_plus_username ?>" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>
              <?php endif; ?>
            </div>
          </div><!-- row -->
          <p class="lead"><?php echo $bio_excerpt ?><p>

          <?php echo $full_bio ?>

          <hr>

          <h3>The Numbers <small>They Don't Lie</small></h3>

          <div class="row">

            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">
                  <?php echo $num_students ?> <span>students</span>
                </div><!-- num-content -->
              </div><!-- num -->
            </div><!-- col -->

            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">
                  <?php echo $num_reviews ?> <span>reviews</span>
                </div><!-- num-content -->
              </div><!-- num -->
            </div><!-- col -->

            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">
                  <?php echo $num_courses ?> <span>courses</span>
                </div><!-- num-content -->
              </div><!-- num -->
            </div><!-- col -->

          </div><!-- row -->

        </div><!-- col -->
      </div><!-- row -->
    </div><!-- container -->

  </section><!-- instructor -->

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
