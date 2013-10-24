<?php
/**
 * @package WordPress
 * @subpackage smr
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
  <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <script src="<?php echo get_bloginfo('template_url'); ?>/js/main.js"></script>
  <script src="<?php echo get_bloginfo('template_url'); ?>/js/index.js"></script>
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

  <body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
      <header id="masthead" class="site-header" role="banner">

      <div class="wrapper">
        <div class="container">
          <h1 class="site-header">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
              title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" 
              rel="home">
              <img src="<?php echo get_bloginfo('template_url'); ?>/images/LogoSMR.png" alt="Logo SMR">
            </a>
          </h1>

          <div class="els-centrales">
            <h3>Experiencia y Seguridad</h3>
            <h4>Sistema de gestión de calidad</h4>
          </div>

				<nav id="site-navigation" class="navigation main-navigation <?php echo $slug; ?>" role="navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'primario', 'menu_class' => 'nav-menu' ) ); ?>

					<?php //get_search_form(); ?>
				</nav><!-- #site-navigation -->

        </div><!-- .container -->
      </div><!-- .wrapper -->


		</header><!-- #masthead -->

