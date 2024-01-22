<?php
/**
 * Custom Header feature
 *
 * Setup custom header
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

/**
 * Setup the WordPress core custom header feature.
 *
 * @uses responsive_mobile_header_style()
 * @uses responsive_mobile_admin_header_style()
 * @uses responsive_mobile_admin_header_image()
 *
 * @package Responsive
 */
function responsive_mobile_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'responsive_mobile_custom_header_args', array(
		'flex-width'             => true,
		'flex-height'            => true,
		'width'                  => 780,
		'height'                 => 200,
		'default-text-color'     => '333',
		'wp-head-callback'       => 'responsive_mobile_header_style',
		'admin-head-callback'    => 'responsive_mobile_admin_header_style',
		'admin-preview-callback' => 'responsive_mobile_admin_header_image',
	) ) );
}
add_action( 'after_setup_theme', 'responsive_mobile_custom_header_setup' );

if ( ! function_exists( 'responsive_mobile_header_style' ) ) {
	/**
	 * Styles the header image and text displayed on the blog
	 *
	 * @see responsive_mobile_custom_header_setup().
	 */
	function responsive_mobile_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		* If no custom options for text are set, let's bail.
		* get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		*/
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( 'blank' == $header_text_color ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that
		else :
	?>
		#site-branding .site-name a,
		.site-description {
			color: #<?php echo $header_text_color; ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
}

if ( ! function_exists( 'responsive_mobile_admin_header_style' ) ) {
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * @see responsive_mobile_custom_header_setup().
 */
function responsive_mobile_admin_header_style() {
?>
	<style type="text/css">
		.appearance_page_custom-header #headimg {
			background-repeat: no-repeat;
			border: none;
		}
		#headimg h1,
		#desc {
		}
		#headimg h1 {
		}
		#headimg h1 a {
			color: #333333!important;
			font-weight: 700;
			text-decoration: none;
		}
		#desc {
		}
		#headimg img {
		}
	</style>
<?php
}
} // responsive_mobile_admin_header_style

if ( ! function_exists( 'responsive_mobile_admin_header_image' ) ) {
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see responsive_mobile_custom_header_setup().
 */
function responsive_mobile_admin_header_image() {
	$style = sprintf( ' style="color:#%s;"', get_header_textcolor() );
?>
	<div id="headimg">
		<?php if ( get_header_image() ) : ?>
			<img src="<?php header_image(); ?>" alt="">
		<?php endif; ?>
	</div>
<?php
}
}
