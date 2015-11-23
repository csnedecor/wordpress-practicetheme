<?php
/*
  Template Name: Home Page
 */

//Custom fields
//syntax for get_post_meta: page_id (integer), name of custom field(string), whether or not to return a single value (boolean, default: false)
//Note: To add custom fields to wordpress dashboard: go to this page, click screen options, make sure "custom fields" is checked. Scroll to bottom, click "add custom field" and add variables.
$optin_text         = get_post_meta( 7, 'optin_text', true);
$optin_button_text  = get_post_meta( 7, 'optin_button_text', true);

//Advanced Custom Fields
//Note: To add Advanced Custom Fields, install the Advanced Custom Fields plugin by Elliot Condon, add field groups, then use the field names it generates in your get_field statement.
$income_feature_image     = get_field('income_feature_image');
$income_section_title     = get_field('income_section_title');
$income_section_desc      = get_field('income_section_description');
$reason_1_title           = get_field('reason_1_title');
$reason_1_desc            = get_field('reason_1_description');
$reason_2_title           = get_field('reason_2_title');
$reason_2_desc            = get_field('reason_2_description');

$who_feature_image        = get_field('who_section_image');
$who_section_title        = get_field('who_section_title');
$who_section_body         = get_field('who_section_body');

$features_section_image   = get_field('features_section_image');
$features_section_title   = get_field('features_section_title');
$features_section_body    = get_field('features_section_body');

$project_feature_title    = get_field('project_feature_title');
$project_feature_body     = get_field('project_feature_body');

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

  <!-- OPT-IN SECTION -->
  <section id="optin">
    <div class="container">
      <div class="row">

        <div class="col-sm-8">
          <p class="lead"><?php echo $optin_text ?></p>
        </div><!-- col -->
        <div class="col-sm-4">
          <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
            <?php echo $optin_button_text ?>
          </button>
        </div><!-- col -->
      </div><!-- row -->

    </div><!-- container -->

  </section><!-- optin -->

  <!-- BOOST YOUR INCOME -->

  <section id="boost-income">
    <div class="container">

      <div class="section-header">

        <?php if( !empty($income_feature_image) ) : ?>

          <img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">
        <?php endif ?>

        <h2><?php echo $income_section_title; ?></h2>
      </div><!-- section-header -->

      <p class="lead"><?php echo $income_section_desc; ?></p>
      <div class="row">
        <div class="col-sm-6">
          <h3><?php echo $reason_1_title; ?></h3>
          <p><?php echo $reason_1_desc; ?></p>
        </div><!-- end col -->

        <div class="col-sm-6">
          <h3><?php echo $reason_2_title; ?></h3>
          <p><?php echo $reason_2_desc; ?></p>
        </div><!-- end col -->
      </div><!-- row -->

    </div><!-- container -->
  </section><!-- boost-income -->

  <!-- WHO BENEFITS -->
  <section id="who-benefits">
    <div class="container">

      <div class="section-header">
        <?php if( !empty($who_feature_image) ) : ?>

          <img src="<?php echo $who_feature_image['url']; ?>" alt="<?php echo $who_feature_image['alt']; ?>">
        <?php endif ?>

        <h2><?php echo $who_section_title; ?></h2>
      </div><!-- section-header -->

      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

          <?php echo $who_section_body; ?>

        </div><!-- end col -->
      </div><!-- row -->

    </div><!-- container -->
  </section><!-- who-benefits -->

  <!-- COURSE FEATURES -->
  <section id="course-features">
    <div class="container">

      <div class="section-header">
        <?php if( !empty($features_section_image) ) : ?>

          <img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">
        <?php endif ?>

        <h2><?php echo $features_section_title; ?></h2>

        <?php if( !empty($features_section_body) ) : ?>
          <p class="lead"><?php echo $features_section_body; ?></p>
        <?php endif; ?>
      </div>

      <div class="row">
        <!-- Created custom post type using Custom Post Type UI that only supports "Title" , then added custom field radio button to the post type that allows user to choose which icon to use (computer, instructor, watch etc.), then replaces the <i class> with ci ci-computer or ci ci-watch etc to correspond to the correct CSS classes. Syntax for radio buttons in advanced custom field: ci ci-computer : Computer -->

        <!-- Get the course_feature custom post array -->
        <?php $loop = new WP_Query(array( 'post_type' => 'course_feature', 'order_by' => 'post_id', 'order' => 'ASC')); ?>

        <!-- Loop through each course feature in the "course_features" custom post array -->
        <?php while($loop->have_posts()) : $loop->the_post(); ?>
          <div class="col-sm-2">
            <i class="<?php the_field('course_feature_icon'); ?>"></i>
            <h3><?php the_title(); ?></h3>

          </div><!-- col -->

        <?php endwhile; ?>
      </div><!-- row -->

    </div><!-- container -->

  </section><!-- course-features -->

  <!-- PROJECT FEATURES -->
  <section id="project-features">
    <div class="container">

      <!-- Created Project Features title and body using advanced custom fields, then created each project feature using custom post types with a feature image, editor and title (default WordPress fields, so just check the appropriate boxes when creating the post type) -->
      <h2><?php echo $project_feature_title ?></h2>
      <p class="lead"><?php echo $project_feature_body ?></p>

      <div class="row">
        <!-- Get the project_feature custom post array -->
        <?php $loop = new WP_Query(array( 'post_type' => 'project_feature', 'order_by' => 'post_id', 'order' => 'ASC')); ?>

          <!-- Loop through each course feature in the "project_feature" custom post array -->
          <?php while($loop->have_posts()) : $loop->the_post(); ?>
            <div class="col-sm-4">
              <?php
                if ( has_post_thumbnail() ) {
                  the_post_thumbnail();
                }
              ?>
              <h3><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>
            </div><!-- col -->

          <?php endwhile; ?>

      </div><!-- row -->

    </div><!-- container -->
  </section><!-- project-features -->

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
          <?php endwhile; ?>

        </div><!-- end col -->

      </div><!-- row -->
    </div><!-- container -->
  </section><!-- kudos -->
<?php get_footer(); ?>
