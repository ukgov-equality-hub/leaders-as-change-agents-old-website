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

function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

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





