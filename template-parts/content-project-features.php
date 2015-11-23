<?php
  //Advanced Custom Fields
  //Note: To add Advanced Custom Fields, install the Advanced Custom Fields plugin by Elliot Condon, add field groups, then use the field names it generates in your get_field statement.
  $project_feature_title    = get_field('project_feature_title');
  $project_feature_body     = get_field('project_feature_body');
?>

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

        <?php endwhile; wp_reset_query(); ?>

    </div><!-- row -->

  </div><!-- container -->
</section><!-- project-features -->
