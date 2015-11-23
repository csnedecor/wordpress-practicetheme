<?php
  //Advanced Custom Fields
  //Note: To add Advanced Custom Fields, install the Advanced Custom Fields plugin by Elliot Condon, add field groups, then use the field names it generates in your get_field statement.
  $features_section_image   = get_field('features_section_image');
  $features_section_title   = get_field('features_section_title');
  $features_section_body    = get_field('features_section_body');
?>
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

      <?php endwhile; wp_reset_query(); ?>
    </div><!-- row -->

  </div><!-- container -->

</section><!-- course-features -->
