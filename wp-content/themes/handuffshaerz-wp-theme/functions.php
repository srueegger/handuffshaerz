<?php
/***************************************
 *	 CREATE GLOBAL VARIABLES
 ***************************************/
define( 'HOME_URI', home_url() );
define( 'THEME_URI', get_template_directory_uri() );
define( 'THEME_IMAGES', THEME_URI . '/dist-assets/images' );
define( 'DEV_CSS', THEME_URI . '/dev-assets/css' );
define( 'DEV_JS', THEME_URI . '/dev-assets/js' );
define( 'DIST_CSS', THEME_URI . '/dist-assets/css' );
define( 'DIST_JS', THEME_URI . '/dist-assets/js' );


/***************************************
 * Include helpers
 ***************************************/
require_once 'inc/gravityforms.php';

/***************************************
 * 		Theme Support and Options
 ***************************************/
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support( 'title-tag' );
add_theme_support( 'menus' );

/***************************************
 * Custom Image Size
 ***************************************/

/***************************************
 * Add Wordpress Menus
 ***************************************/
function register_huh_menu() {
	register_nav_menu( 'main-menu', 'Hauptmenü' );
}
add_action( 'after_setup_theme', 'register_huh_menu' );

/***************************************
 * 		Enqueue scripts and styles.
 ***************************************/
function huh_startup_scripts() {
	//Google Fonts
	wp_enqueue_style( 'huh-google-font', 'https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700|Montserrat:400,700' );
	//Google Maps
	wp_enqueue_script( 'huh-google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBQtwK65Jm6aNAuB5ep1JmwutTBT-pFKlM&language=de-CH&region=CH', null, null, true );
	if (WP_DEBUG) {
		wp_enqueue_style( 'huh-style', DEV_CSS . '/theme.css', array('huh-google-font'), '1' );
		wp_register_script( 'huh-script', DEV_JS ."/theme.js", array('jquery', 'huh-google-maps'), '1', true );
	} else {
		wp_enqueue_style( 'huh-style', DIST_CSS . '/theme.min.css', array('huh-google-font'), '1' );
		wp_register_script( 'huh-script', DIST_JS ."/theme.min.js", array('jquery', 'huh-google-maps'), '1', true );
	}
	$global_vars = array(
		'ajaxurl' => admin_url('admin-ajax.php')
	);
	wp_localize_script( 'huh-script', 'global_vars', $global_vars );
	wp_enqueue_script( 'huh-script' );
}
add_action( "wp_enqueue_scripts", "huh_startup_scripts" );

/***************************************
 * 		huh ACF Init
 ***************************************/
function huh_acf_init() {
	 $args = array(
		'page_title' => 'Einstellungen für die Compresso Inventarliste',
		'menu_title' => 'Inventarliste',
		'menu_slug' => 'huh-theme-settings',
		'parent_slug' => 'options-general.php',
	);
	acf_add_options_sub_page($args);
	//Google Maps initialisieren
	acf_update_setting('google_api_key', 'AIzaSyB8JdkWhYxFGfvyQAwfrtYAHgjpcylRejs');
}
//add_action( 'acf/init', 'huh_acf_init' );

/***************************************
 * Remove Menus from Backend
 ***************************************/
function huh_remove_menus() {
	remove_menu_page( 'edit.php' );
	remove_menu_page( 'edit-comments.php' );
	//remove_menu_page( 'tools.php' );
}
//add_action( 'admin_menu', 'huh_remove_menus' );