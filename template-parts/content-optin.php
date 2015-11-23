<?php

//Custom fields
//syntax for get_post_meta: page_id (integer), name of custom field(string), whether or not to return a single value (boolean, default: false)
//Note: To add custom fields to wordpress dashboard: go to this page, click screen options, make sure "custom fields" is checked. Scroll to bottom, click "add custom field" and add variables.
  $optin_text         = get_post_meta( 7, 'optin_text', true);
  $optin_button_text  = get_post_meta( 7, 'optin_button_text', true);
?>

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
