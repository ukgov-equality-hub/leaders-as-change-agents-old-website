<?php
/**
 * Header
 *
 * Displays all information in head, starts the body tag, contains theme header
 * and nav and starts the main content wrapper
 *
 * @package      responsive_mobile
 * @license      license.txt
 * @copyright    2014 CyberChimps Inc
 * @since        0.0.1
 *
 * Please do not edit this file. This file is part of the responsive_mobile Framework and all modifications
 * should be made in a child theme.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
?>
<!DOCTYPE html>
<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if gt IE 9]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
	<head>
		<?php responsive_mobile_head_top(); ?>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" /> 

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php responsive_mobile_head_bottom(); ?>

		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php responsive_mobile_body_top(); ?>
<div id="container" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'responsive-mobile' ); ?></a>
	<a class="skip-link screen-reader-text" href="#main-navigation"><?php _e( 'Skip to main menu', 'responsive-mobile' ); ?></a>
<?php responsive_mobile_container_top(); ?>
<?php if ( has_nav_menu( 'top-menu', 'responsive-mobile' ) ) { ?>
	<div id="top-menu-container" class="container-full-width">
		<nav id="top-menu" class="container" itemscope itemtype="http://schema.org/SiteNavigationElement">
			<?php wp_nav_menu(
				array(
					'container'      => '',
					'fallback_cb'    => false,
					'menu_class'     => 'top-menu',
					'theme_location' => 'top-menu',
					'depth'          => 1
				)
			); ?>
		</nav>
	</div><!-- top menu container -->
<?php } ?>
<?php responsive_mobile_header_before(); ?>
        <div id="header_section">
	<header id="header" class="container-full-width site-header" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
		<?php responsive_mobile_header_top(); ?>
		<div class="container">
			<div class="header-row">
				<div id="site-branding">
					<?php responsive_mobile_header_one(); ?>
				</div>
				<div id="secondary-header">
					<?php responsive_mobile_header_two(); ?>
				</div>
			</div>
		</div>

		<?php responsive_mobile_header_bottom(); ?>
	</header><!-- #header -->
<?php responsive_mobile_header_end(); ?>

	<div id="main-menu-container" class="container-full-width">
		<div id="main-menu" class="container">
			<nav id="main-navigation" class="site-navigation" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
				<div id="mobile-current-item"><?php responsive_mobile_menu_title(); ?></div>
				<button id="mobile-nav-button"><span class="accessibile-label"><?php _e( 'Mobile menu toggle', 'responsive-mobile' ); ?></span></button>
				<?php wp_nav_menu(
					array(
						'container'       => 'div',
						'container_class' => 'main-nav',
						'theme_location'  => 'header-menu'
					)
				); ?>
			</nav><!-- #site-navigation -->
		</div><!-- #main-menu -->
	</div><!-- #main-menu-container -->
	<div id="sub-menu-container" class="container-full-width">
		<div id="sub-menu" class="container">
			<nav id="sub-navigation" class="site-navigation" role="navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
			<?php if( has_nav_menu( 'sub-header-menu', 'responsive-mobile' ) ) {
				wp_nav_menu(
					array(
						'container'      => '',
						'menu_class'     => 'sub-header-menu',
						'theme_location' => 'sub-header-menu'
					)
				);
			} ?>
			</nav><!-- #site-navigation -->
		</div><!-- #sub-menu -->
	</div><!-- #sub-menu-container -->
        </div>
<?php responsive_mobile_wrapper(); // before wrapper container hook ?>
	<div id="wrapper" class="site-content container-full-width">
<?php responsive_mobile_wrapper_top(); // before wrapper content hook ?>
<?php responsive_mobile_in_wrapper(); // wrapper hook ?>
