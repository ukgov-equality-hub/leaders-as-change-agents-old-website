<?php
/**
 * Main Function
 *
 * Load functions and classes
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

$template_directory = get_template_directory();

/**
 * Basic theme functionality
*/
require $template_directory . '/includes/functions.php';

/**
 * Theme Options
 */
require $template_directory . '/libraries/class-responsive-options.php';
require $template_directory . '/includes/functions-theme-options.php';
require $template_directory . '/includes/functions-theme-options-page.php';
require( $template_directory . '/includes/customizer.php' );
require( $template_directory . '/includes/admin-about.php' );

/**
 * Meta Box Options
 */
require $template_directory . '/libraries/class-meta-box.php';
require $template_directory . '/includes/functions-meta-box.php';

/**
 * Custom template tags for this theme.
 */
require $template_directory . '/includes/functions-template-tags.php';

/**
 * Support THA Theme hooks through Responsives own functions.
 */
require $template_directory . '/core/tha-theme-hooks.php';
//require $template_directory . '/core/functions-demodata.php';
require $template_directory . '/includes/responsive-hooks.php';

/**
 * Theme Upsell
 */
//require $template_directory . '/core/functions-theme-upsell.php';

/**
 * Create header items that hook into header.php
 */
require $template_directory . '/includes/functions-header.php';

/**
 * Implement the Custom Header feature.
 */
require $template_directory . '/includes/functions-custom-header.php';

/**
 * Custom functions that act independently to the theme templates.
 */
require $template_directory . '/includes/functions-extras.php';
require $template_directory . '/includes/functions-extentions.php';
require $template_directory . '/includes/functions-layout.php';
require $template_directory . '/includes/functions-front.php';

/**
 * Register Menus
 */
require $template_directory . '/includes/functions-menu.php';

/**
 * Register Sidebars
 */
require $template_directory . '/includes/functions-sidebar.php';

/**
 * Plugin compatibility
 */
require $template_directory . '/includes/functions-plugins.php';

/**
 * Theme Update
 */
require $template_directory . '/includes/functions-update.php';

/**
 * Plugin dependency
 */
require $template_directory . '/core/functions-install.php';

/**
 * Admin functionality
 */
require $template_directory . '/core/functions-admin.php';

if ( ! defined( 'ELEMENTOR_PARTNER_ID' ) ) {
	define( 'ELEMENTOR_PARTNER_ID', 2126 );
}

// enabling theme support for title tag
function responsivemobile_title_setup()
{
	add_theme_support( 'title-tag' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'responsivemobile_title_setup' );

function responsive_mobile_customize_register( $wp_customize ) {

   $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
   $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

   $wp_customize->selective_refresh->add_partial( 'blogname', array(
'selector' => '.site-name a',
) );

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
	) );


	$wp_customize->selective_refresh->add_partial( 'responsive_mobile_theme_options[copyright_textbox]', array(
		'selector' => '.copyright',
	) );

	$wp_customize->selective_refresh->add_partial( 'nav_menu_locations[top-menu]', array(
		'selector' => '.main-nav',
	) );

	$wp_customize->selective_refresh->add_partial( 'responsive_mobile_theme_options[home_headline]', array(
		'selector' => '.featured-title',
	) );

	$wp_customize->selective_refresh->add_partial( 'responsive_mobile_theme_options[home_subheadline]', array(
		'selector' => '.featured-subtitle',
	) );

	$wp_customize->selective_refresh->add_partial( 'responsive_mobile_theme_options[home_content_area]', array(
		'selector' => '.featured-text',
	) );

	$wp_customize->selective_refresh->add_partial( 'responsive_mobile_theme_options[cta_text]', array(
		'selector' => '#call-to-action',
	) );

	$wp_customize->selective_refresh->add_partial( 'responsive_mobile_theme_options[featured_content]', array(
		'selector' => '.featured-image',
	) );

	$wp_customize->selective_refresh->add_partial( 'responsive_mobile_theme_options[callout_headline]', array(
		'selector' => '.callout-title',
	) );

	$wp_customize->selective_refresh->add_partial( 'responsive_mobile_theme_options[callout_content_area]', array(
		'selector' => '.callout-text',
	) );

	$wp_customize->selective_refresh->add_partial( 'responsive_mobile_theme_options[callout_cta_text]', array(
		'selector' => '#callout-cta',
	) );
	$wp_customize->selective_refresh->add_partial( 'responsive_mobile_theme_options[poweredby_link]', array(
		'selector' => '.powered',
	) );

	$wp_customize->selective_refresh->add_partial( 'sidebars_widgets[home-widget-1]', array(
		'selector' => '#home_widget_1',
	) );

	$wp_customize->selective_refresh->add_partial( 'sidebars_widgets[home-widget-2]', array(
		'selector' => '#home_widget_2',
	) );

	$wp_customize->selective_refresh->add_partial( 'sidebars_widgets[home-widget-3]', array(
		'selector' => '#home_widget_3',
	) );

	$wp_customize->selective_refresh->add_partial( 'responsive_mobile_theme_options[team_title]', array(
		'selector' => '.section_title span',
	) );

	$wp_customize->selective_refresh->add_partial( 'responsive_mobile_theme_options[team_val]', array(
		'selector' => '.team_first_row',
	) );

	$wp_customize->selective_refresh->add_partial( 'responsive_mobile_theme_options[team]', array(
		'selector' => '#team_inner_div',
	) );

}

add_action( 'customize_register', 'responsive_mobile_customize_register' );
add_theme_support( 'customize-selective-refresh-widgets' );

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( !is_plugin_active( 'cyberchimpsoptions/cc-pro-features.php' ) )
	add_action( 'customize_controls_print_footer_scripts', 'responsive_mobile_add_upgrade_button' );

function responsive_mobile_add_upgrade_button() {

	// Get the upgrade link.
	$upgrade_link = esc_url_raw( 'https://cyberchimps.com/store/pro-features/' );
	?>
	<script type="text/javascript">
		jQuery( document ).ready( function( $ ) {
			jQuery( '#customize-info .accordion-section-title' ).append( '<a target="_blank" class="button btn-upgrade" href="<?php echo esc_url( $upgrade_link ); ?>"><?php esc_html_e( 'Upgrade To Pro', 'responsive-mobile' ); ?></a>' );
			jQuery( '#customize-info .btn-upgrade' ).click( function( event ) {
				event.stopPropagation();
			} );
		} );
	</script>
	<style>
		.wp-core-ui .btn-upgrade {
			color: #fff;
			background: none repeat scroll 0 0 #5BC0DE;
			border-color: #CCCCCC;
			box-shadow: 0 1px 0 #5BC0DE inset, 0 1px 0 rgba(0, 0, 0, 0.08);
			float: right;
			//margin-top: -23px;
			margin-top: 15px;
			font-size: 14px;
			height: 30px;
			margin-bottom: 15px;
		}
		.wp-core-ui .btn-upgrade:hover {
			color: #fff;
			background: none repeat scroll 0 0 #39B3D7;
			box-shadow: 0 1px 0 #39B3D7 inset, 0 1px 0 rgba(0, 0, 0, 0.08);
		}
		.wp-core-ui #customize-info .theme-name{
					word-break: break-all;
					padding-right: 120px;
		}
		.wp-full-overlay-sidebar-content #customize-info {background-color: #fff;}
	</style>
	<?php
}

add_action( 'admin_notices', 'responsive_mobile_rating_notice' );
function responsive_mobile_rating_notice()
{
	$check_screen = get_admin_page_title();

	if ( $check_screen == 'Theme Options' )
	{
	?>

    <div class="notice notice-success is-dismissible">
        <b><p>Liked this theme? <a href="https://wordpress.org/support/theme/responsive-mobile/reviews/#new-post" target="_blank">Leave us</a> a ***** rating. Thank you! </p></b>
    </div>
    <?php
	}
}


if( !function_exists('responsive_get_attachment_id_from_url') ) :
function responsive_get_attachment_id_from_url( $attachment_url = '' ) {
	global $wpdb;
	$attachment_id = false;
	// If there is no url, return.
	if ( '' == $attachment_url )
		return;
	// Get the upload directory paths
	$upload_dir_paths = wp_upload_dir();
	// Make sure the upload path base directory exists in the attachment URL, to verify that we're working with a media library image
	if ( false !== strpos( $attachment_url, $upload_dir_paths['baseurl'] ) ) {
		// If this is the URL of an auto-generated thumbnail, get the URL of the original image
		$attachment_url = preg_replace( '/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $attachment_url );
		// Remove the upload path base directory from the attachment URL
		$attachment_url = str_replace( $upload_dir_paths['baseurl'] . '/', '', $attachment_url );
		// Finally, run a custom database query to get the attachment ID from the modified attachment URL
		$attachment_id = $wpdb->get_var( $wpdb->prepare( "SELECT wposts.ID FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta WHERE wposts.ID = wpostmeta.post_id AND wpostmeta.meta_key = '_wp_attached_file' AND wpostmeta.meta_value = '%s' AND wposts.post_type = 'attachment'", $attachment_url ) );
	}
	return $attachment_id;
}
endif;
/* ================= Sticky Header Setting  ===========================  */

add_action( 'wp_footer', 'cyberchimps_fixed_menu_onscroll' );
function cyberchimps_fixed_menu_onscroll()
{
    $responsive_options = responsive_mobile_get_options();
    if ( isset( $responsive_options['sticky_header']) && $responsive_options['sticky_header'] == '1') {


	?>
		<script type="text/javascript">
		jQuery(document).ready(function($){
			$(window).scroll(function()  {
			if ($(this).scrollTop() > 0) {
			$('#header_section').addClass("sticky-header");

			}
			else{
			$('#header_section').removeClass("sticky-header");

			}
			});
		});
		</script>
	<?php
	}
}
if( !function_exists('responsive_exclude_post_cat') ) :
function responsive_exclude_post_cat( $query ){
	$cat = get_theme_mod( 'responsive_mobile_exclude_post_cat' );

	if( $cat && ! is_admin() && $query->is_main_query() ){
		$cat = array_diff( array_unique( $cat ), array('') );
		if( $query->is_home() || $query->is_archive() ) {
			$query->set( 'category__not_in', $cat );
			//$query->set( 'cat', '-5,-6,-65,-66' );
		}
	}
}
endif;
add_filter( 'pre_get_posts', 'responsive_exclude_post_cat' );
function responsive_custom_category_widget( $arg ) {
	$cat = get_theme_mod( 'exclude_post_cat' );

	if( $cat ){
		$cat = array_diff( array_unique( $cat ), array('') );
		$arg["exclude"] = $cat;
	}
	return $arg;
}
add_filter( "widget_categories_args", "responsive_custom_category_widget" );
add_filter( "widget_categories_dropdown_args", "responsive_custom_category_widget" );

function responsive_exclude_post_cat_recentpost_widget($array){
	$s = '';
	$i = 1;
	$cat = get_theme_mod( 'exclude_post_cat' );

	if( $cat ){
		$cat = array_diff( array_unique( $cat ), array('') );
		foreach( $cat as $c ){
			$i++;
			$s .= '-'.$c;
			if( count($cat) >= $i )
				$s .= ', ';
		}
	}
	$array['cat']=array($s);
	//$exclude = array( 'cat' => $s );

	return $array;
}
add_filter( "widget_posts_args", "responsive_exclude_post_cat_recentpost_widget" );

function responsive_pro_categorylist_validate( ) {
		// An array of valid results
		$args = array(
				'type'         => 'post',
				'orderby'      => 'name',
				'order'        => 'ASC',
				'hide_empty'   => 1,
				'hierarchical' => 1,
				'taxonomy'     => 'category'
		);
		$option_categories = array();
		$category_lists = get_categories( $args );
		$option_categories[''] = esc_html(__( 'Choose Category', 'responsive-mobile' ));
		foreach( $category_lists as $category ){
			$option_categories[$category->term_id] = $category->name;
		}
		return $option_categories;
	}
	/**
	 *  Enqueue block styles  in editor
	 */
	function responsive_mobile_block_styles() {
		wp_enqueue_style( 'rm-gutenberg-blocks', get_stylesheet_directory_uri() . '/css/gutenberg-blocks.css', array(), '1.0' );
	}
	add_action( 'enqueue_block_editor_assets', 'responsive_mobile_block_styles' );












function our_members_labels( $args ) {
	$labels['name'] 			= __( 'Our members' );
	$labels['add_new_item'] 	= sprintf( __( 'Add New %s' ), __( 'Member' ) );
	$labels['add_new'] 			= _x( 'Add New', 'member' );
	$labels['singular_name'] 	= _x( 'Our members', 'post type singular name' );

	$args['labels'] 			= $labels;

	return $args;
}
add_filter( 'woothemes_our_team_post_type_args', 'our_members_labels' );






// CUSTOM POST - CASE STUDIES

function casestudy_init() {
	register_post_type( 'casestudy', array(
		'labels'            => array(
			'name'                => __( 'Case Studies', 'YOUR-TEXTDOMAIN' ),
			'singular_name'       => __( 'Case Studies', 'YOUR-TEXTDOMAIN' ),
			'all_items'           => __( 'All Case Studies', 'YOUR-TEXTDOMAIN' ),
			'new_item'            => __( 'New Case Study', 'YOUR-TEXTDOMAIN' ),
			'add_new'             => __( 'Add New', 'YOUR-TEXTDOMAIN' ),
			'add_new_item'        => __( 'Add New Case Study', 'YOUR-TEXTDOMAIN' ),
			'edit_item'           => __( 'Edit Case Study', 'YOUR-TEXTDOMAIN' ),
			'view_item'           => __( 'View Case Study', 'YOUR-TEXTDOMAIN' ),
			'search_items'        => __( 'Search Case Studies', 'YOUR-TEXTDOMAIN' ),
			'not_found'           => __( 'No Case Studies found', 'YOUR-TEXTDOMAIN' ),
			'not_found_in_trash'  => __( 'No Case Studies found in trash', 'YOUR-TEXTDOMAIN' ),
			'parent_item_colon'   => __( 'Parent Case Study', 'YOUR-TEXTDOMAIN' ),
			'menu_name'           => __( 'Case Studies', 'YOUR-TEXTDOMAIN' ),
		),
		'public'            => true,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_in_nav_menus' => true,
		'supports'          => array( 'title', 'editor', 'excerpt' ),
		'has_archive'       => 'casestudies',
		'rewrite'           => array( 'slug' => 'casestudies', 'with_front' => false ),
		'query_var'         => true,
		'menu_icon'         => 'dashicons-portfolio',
		'show_in_rest'      => true
	) );

}
add_action( 'init', 'casestudy_init' );

function casestudy_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['casestudy'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Case Study updated. <a target="_blank" href="%s">View Case Study</a>', 'YOUR-TEXTDOMAIN'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'YOUR-TEXTDOMAIN'),
		3 => __('Custom field deleted.', 'YOUR-TEXTDOMAIN'),
		4 => __('Case Study updated.', 'YOUR-TEXTDOMAIN'),
		5 => isset($_GET['revision']) ? sprintf( __('Case Study restored to revision from %s', 'YOUR-TEXTDOMAIN'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Case Study published. <a href="%s">View Case Study</a>', 'YOUR-TEXTDOMAIN'), esc_url( $permalink ) ),
		7 => __('Case Study saved.', 'YOUR-TEXTDOMAIN'),
		8 => sprintf( __('Case Study submitted. <a target="_blank" href="%s">Preview Case Study</a>', 'YOUR-TEXTDOMAIN'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Case Study scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Case Study</a>', 'YOUR-TEXTDOMAIN'),
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Case Study draft updated. <a target="_blank" href="%s">Preview Case Study</a>', 'YOUR-TEXTDOMAIN'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'casestudy_updated_messages' );

function work_init() {
	register_taxonomy( 'work', array( 'casestudy' ), array(
		'hierarchical'      => true,
		'public'            => true,
		//'publicly_queryable' => false,
		'show_in_nav_menus' => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => true,
		'capabilities'      => array(
			'manage_terms'  => 'edit_posts',
			'edit_terms'    => 'edit_posts',
			'delete_terms'  => 'edit_posts',
			'assign_terms'  => 'edit_posts'
		),
		'labels'            => array(
			'name'                       => __( 'Case Study categories', 'YOUR-TEXTDOMAIN' ),
			'singular_name'              => _x( 'Case Study category', 'taxonomy general name', 'YOUR-TEXTDOMAIN' ),
			'search_items'               => __( 'Search Case Study categories', 'YOUR-TEXTDOMAIN' ),
			'popular_items'              => __( 'Popular Case Study categories', 'YOUR-TEXTDOMAIN' ),
			'all_items'                  => __( 'All Case Study categories', 'YOUR-TEXTDOMAIN' ),
			'parent_item'                => __( 'Parent Case Study category', 'YOUR-TEXTDOMAIN' ),
			'parent_item_colon'          => __( 'Parent Case Study category:', 'YOUR-TEXTDOMAIN' ),
			'edit_item'                  => __( 'Edit Case Study category', 'YOUR-TEXTDOMAIN' ),
			'update_item'                => __( 'Update Case Study category', 'YOUR-TEXTDOMAIN' ),
			'add_new_item'               => __( 'New Case Study category', 'YOUR-TEXTDOMAIN' ),
			'new_item_name'              => __( 'New Case Study category', 'YOUR-TEXTDOMAIN' ),
			'separate_items_with_commas' => __( 'Case Study categories separated by comma', 'YOUR-TEXTDOMAIN' ),
			'add_or_remove_items'        => __( 'Add or remove Case Study categories', 'YOUR-TEXTDOMAIN' ),
			'choose_from_most_used'      => __( 'Choose from the most used Case Study categories', 'YOUR-TEXTDOMAIN' ),
			'not_found'                  => __( 'No Case Study categories found.', 'YOUR-TEXTDOMAIN' ),
			'menu_name'                  => __( 'Case Study categories', 'YOUR-TEXTDOMAIN' ),
		),
		'show_in_rest'      => true,
// 		'rest_base'         => '100-work',
// 		'rest_controller_class' => 'WP_REST_Terms_Controller',
	) );

}
add_action( 'init', 'work_init' );



// ADD META BOX TO CASE STUDIES

add_action( 'cmb2_admin_init', 'cmb2_case_extras' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_case_extras() {

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'casestudy_metabox',
		'title'         => __( 'Case study details', 'cmb2' ),
		'object_types'  => array( 'casestudy', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$cmb->add_field( array(
		'name'       => __( 'Job title', 'cmb2' ),
		'id'         =>'job_title',
		'type'       => 'text_medium',
	) );

	$cmb->add_field( array(
		'name'       => __( 'Employer', 'cmb2' ),
		'id'         =>'employer',
		'type'       => 'text_medium',
	) );

	$cmb->add_field( array(
		'name'       => __( 'Sector', 'cmb2' ),
		'id'         =>'sector',
		'type'       => 'text_medium',
	) );

	$cmb->add_field( array(
		'name'       => __( 'Photo', 'cmb2' ),
		'id'         =>	'person_pic',
		'type'       => 'file',
	) );

}




// CUSTOM POST - TESTIMONIALS

function testimonial_init() {
	register_post_type( 'testimonial', array(
		'labels'            => array(
			'name'                => __( 'Testimonials', 'YOUR-TEXTDOMAIN' ),
			'singular_name'       => __( 'Testimonial', 'YOUR-TEXTDOMAIN' ),
			'all_items'           => __( 'All Testimonials', 'YOUR-TEXTDOMAIN' ),
			'new_item'            => __( 'New Testimonial', 'YOUR-TEXTDOMAIN' ),
			'add_new'             => __( 'Add New', 'YOUR-TEXTDOMAIN' ),
			'add_new_item'        => __( 'Add New Testimonial', 'YOUR-TEXTDOMAIN' ),
			'edit_item'           => __( 'Edit Testimonial', 'YOUR-TEXTDOMAIN' ),
			'view_item'           => __( 'View Testimonial', 'YOUR-TEXTDOMAIN' ),
			'search_items'        => __( 'Search Testimonials', 'YOUR-TEXTDOMAIN' ),
			'not_found'           => __( 'No Testimonials found', 'YOUR-TEXTDOMAIN' ),
			'not_found_in_trash'  => __( 'No Testimonials found in trash', 'YOUR-TEXTDOMAIN' ),
			'parent_item_colon'   => __( 'Parent Testimonial', 'YOUR-TEXTDOMAIN' ),
			'menu_name'           => __( 'Testimonials', 'YOUR-TEXTDOMAIN' ),
		),
		'public'            => true,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_in_nav_menus' => true,
		'supports'          => array( 'title', 'editor', 'excerpt' ),
		'has_archive'       => 'testimonials',
		'rewrite'           => array( 'slug' => 'testimonials', 'with_front' => false ),
		'query_var'         => true,
		'menu_icon'         => 'dashicons-format-chat',
		'show_in_rest'      => true
	) );

}
add_action( 'init', 'testimonial_init' );

function testimonial_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['testimonial'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Testimonial updated. <a target="_blank" href="%s">View Testimonial</a>', 'YOUR-TEXTDOMAIN'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'YOUR-TEXTDOMAIN'),
		3 => __('Custom field deleted.', 'YOUR-TEXTDOMAIN'),
		4 => __('Testimonial updated.', 'YOUR-TEXTDOMAIN'),
		5 => isset($_GET['revision']) ? sprintf( __('Testimonial restored to revision from %s', 'YOUR-TEXTDOMAIN'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Testimonial published. <a href="%s">View Testimonial</a>', 'YOUR-TEXTDOMAIN'), esc_url( $permalink ) ),
		7 => __('Testimonial saved.', 'YOUR-TEXTDOMAIN'),
		8 => sprintf( __('Testimonial submitted. <a target="_blank" href="%s">Preview Testimonial</a>', 'YOUR-TEXTDOMAIN'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Testimonial scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Testimonial</a>', 'YOUR-TEXTDOMAIN'),
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Testimonial draft updated. <a target="_blank" href="%s">Preview Testimonial</a>', 'YOUR-TEXTDOMAIN'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'testimonial_updated_messages' );


// ADD META BOX TO TESTIMONIALS

add_action( 'cmb2_admin_init', 'cmb2_testimonial_extras' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_testimonial_extras() {

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'testimonials_metabox',
		'title'         => __( 'Testimonial details', 'cmb2' ),
		'object_types'  => array( 'testimonial', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$cmb->add_field( array(
		'name'       => __( 'Job title', 'cmb2' ),
		'id'         =>'job_title',
		'type'       => 'text_medium',
	) );

	$cmb->add_field( array(
		'name'       => __( 'Employer', 'cmb2' ),
		'id'         =>'employer',
		'type'       => 'text_medium',
	) );

	$cmb->add_field( array(
		'name'       => __( 'Sector', 'cmb2' ),
		'id'         =>'sector',
		'type'       => 'text_medium',
	) );

	$cmb->add_field( array(
		'name'       => __( 'Photo', 'cmb2' ),
		'id'         =>	'person_pic',
		'type'       => 'file',
	) );

}





// WIDGET


function caseStudy_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Case Study Sidebar', 'responsive-mobile' ),
		'description'   => __( 'Displays on Case Studies and Work Patterns', 'responsive-mobile' ),
		'id'            => 'casestudy-sidebar',
		'before_title'  => '<div class="widget-title"><h3>',
		'after_title'   => '</h3></div>',
		'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
		'after_widget'  => '</div>'
	) );

}
add_action( 'widgets_init', 'caseStudy_widgets_init' );






