<!DOCTYPE html>
<!--[if IE 6]>
<html class="ie ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<!--[if IE 9]>
<html class="ie ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8) | !(IE 9)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="https://use.fontawesome.com/99084d998b.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="page">
<?php do_action( 'before' ); ?>
  <header class="branding" role="banner">
    <hgroup>
      <h1 class="site-title">
        <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
          <span class="title"><?php bloginfo( 'name' ); ?></span>
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-2-compressor.svg" class="logo">
        </a>
      </h1>
      <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
    </hgroup>

    <nav class="access" role="navigation">
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav><!-- nav.access -->
  </header><!-- header.branding -->

  <div class="main">
