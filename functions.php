<?php
/*This file is part of Tulip, twentytwenty child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

function Tulip_enqueue_child_styles() {
	wp_enqueue_style(
		'slick-css',
		get_stylesheet_directory_uri() . '/css/slick.css',
		array(),
		wp_get_theme()->get('Version') );
	wp_enqueue_style(
		'child-style',
		get_stylesheet_directory_uri() . '/css/styles.css',
		array(),
		wp_get_theme()->get('Version') );
	}
add_action( 'wp_enqueue_scripts', 'Tulip_enqueue_child_styles' );

function js_scripts() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/js/slick.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'functionality', get_stylesheet_directory_uri() . '/js/functionality.js', array('jquery'),'',true );
	if (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8) {
	wp_enqueue_script( 'hubspot-legacy', '//js.hsforms.net/forms/v2-legacy.js', '','',false );
	}
	wp_enqueue_script( 'hubspot', '//js.hsforms.net/forms/v2.js', '','',false );

}
add_action( 'wp_enqueue_scripts', 'js_scripts' );



function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
       'footer-right-menu' => __( 'Footer Right Menu' ),
		'menu-resources' => __( 'Resources Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
	add_image_size('resources-image', 360, 240, true);
	add_image_size('resources-hero', 1267, 380, true);
}

function custom_excerpt_length( $length ) {
        return 20;
    }
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function get_excerpt($limit, $source = null){

    $excerpt = $source == "content" ? get_the_content() : get_the_excerpt();
    $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $limit);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    // $excerpt = $excerpt.'... <a href="'.get_permalink($post->ID).'">more</a>';
    return $excerpt;
}

/**
 * Post Type Brochures
 */
function cptui_register_my_cpts_brochures() {

	/**
	 * Post Type: Brochures.
	 */

	$labels = [
		"name" => __( "Brochures", "Tulip" ),
		"singular_name" => __( "Brochure", "Tulip" ),
		"menu_name" => __( "Brochures", "Tulip" ),
		"all_items" => __( "All Brochures", "Tulip" ),
		"add_new" => __( "Add Brochure", "Tulip" ),
		"add_new_item" => __( "Add New Brochure", "Tulip" ),
		"edit_item" => __( "Edit Brochure", "Tulip" ),
		"new_item" => __( "New Brochure", "Tulip" ),
		"view_item" => __( "View Brochure", "Tulip" ),
		"view_items" => __( "View Brochures", "Tulip" ),
		"not_found" => __( "Brochure not found", "Tulip" ),
	];

	$args = [
		"label" => __( "Brochures", "Tulip" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => "brochures",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "brochures", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "revisions" ],
	];

	register_post_type( "brochures", $args );
}

add_action( 'init', 'cptui_register_my_cpts_brochures' );

