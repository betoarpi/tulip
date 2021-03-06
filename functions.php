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
       'footer-right-menu' => __( 'Footer Right Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
	add_image_size('resources-image', 360, 240, true);
	add_image_size('resources-hero', 1267, 380, true);
}
