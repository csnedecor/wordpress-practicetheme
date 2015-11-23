<?php
  //Advanced Custom Fields
  //Note: To add Advanced Custom Fields, install the Advanced Custom Fields plugin by Elliot Condon, add field groups, then use the field names it generates in your get_field statement.
  $video_featurette_title   = get_field('video_featurette_title');
  $video_featurette_video   = get_field('video_featurette_youtube_video');
?>
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
