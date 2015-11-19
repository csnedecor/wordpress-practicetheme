<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- BOOTSTRAP CORE CSS -->
<!-- Get the stylesheets from within the theme folder, not the root.  It uses WP's "bloginfo('stylesheet_directory')/" so these links will work whether you're on localhost or production. -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">

<!-- Font-Awesome -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

<!-- TypeKit Fonts -->
<script src="https://use.typekit.net/jiy7klb.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>


<?php wp_head(); ?>
<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>

  <header class="site-header" role="banner">

    <!-- NAVBAR -->
    <div class="navbar-wrapper">

      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <a class="navbar-brand" href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to WordPress"></a>
          </div><!-- navbar-header -->

					<?php
						wp_nav_menu( array(

							'theme_location'  => 'primary', //menu will show when "primary" wordpress menu is set
							'container'				=> 'nav',
							'container_class'	=> 'navbar-collapse collapse',
							'menu_class'			=> 'nav navbar-nav navbar-right'

							));
					?>

        </div><!-- container -->
      </div><!-- navbar -->

    </div> <!-- navbar wrapper -->

  </header>
