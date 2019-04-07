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
require_once 'inc/disable-gutenberg.php';
require_once 'inc/ajax-calls.php';
if(!WP_DEBUG):
	require_once 'inc/acf.php';
endif;

/***************************************
 * 		Theme Support and Options
 ***************************************/
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support( 'title-tag' );
add_theme_support( 'menus' );
setlocale(LC_TIME, 'de_CH.UTF8');

/***************************************
 * Custom Image Size
 ***************************************/
add_image_size( 'fullwidth-xl', 1920, 1080, true );
add_image_size( 'fullwidth-lg', 992, 661, true );
add_image_size( 'fullwidth-md', 768, 512, true );
add_image_size( 'fullwidth-sm', 576, 384, true );
add_image_size( 'fullwidth-xs', 400, 267, true );
add_image_size( 'partnerlogo-xl', 508, 9999, false );
add_image_size( 'partnerlogo-lg', 420, 9999, false );
add_image_size( 'partnerlogo-md', 660, 9999, false );
add_image_size( 'partnerlogo-sm', 352, 9999, false );
add_image_size( 'partnerlogo-xs', 258, 152, true );
add_image_size( 'partnerlogo-xl-small', 318, 188, true );
add_image_size( 'teamfoto-xl', 350, 441, true );
add_image_size( 'teamfoto-lg', 320, 416, true );
add_image_size( 'teamfoto-md', 510, 643, true );
add_image_size( 'teamfoto-sm', 545, 687, true );
add_image_size( 'teamfoto-xs', 290, 365, true );
add_image_size( 'kursfoto-xl', 540, 313, true );
add_image_size( 'kursfoto-lg', 430, 249, true );
add_image_size( 'kursfoto-md', 310, 180, true );
add_image_size( 'kursfoto-sm', 490, 284, true );
add_image_size( 'kursfoto-xs', 350, 203, true );

/***************************************
 * Add Wordpress Menus
 ***************************************/
function register_huh_menu() {
	register_nav_menu( 'main-menu', 'Hauptmenü' );
	register_nav_menu( 'footer-menu', 'Footermenü' );
	register_nav_menu( 'socialmedia-menu', 'Social Media Menü' );
}
add_action( 'after_setup_theme', 'register_huh_menu' );

/***************************************
 * 		Enqueue scripts and styles.
 ***************************************/
function huh_startup_scripts() {
	//Google Fonts
	wp_enqueue_style( 'huh-google-font', 'https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700|Open+Sans:400,700' );
	//Google Maps
	wp_enqueue_script( 'huh-google-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDtvo159H5x0G9qus_ZJXIvaPy9vIEz7bM&language=de-CH&region=CH', null, null, true );
	//Cookie Consent
	wp_enqueue_script( 'huh-cookieconsent-script', DIST_JS . '/cookieconsent.min.js', null, '3.1.0', false );
	wp_enqueue_style( 'huh-cookieconsent-style', DIST_CSS . '/cookieconsent.min.css', null, '3.1.0' );
	if (WP_DEBUG) {
		wp_enqueue_style( 'huh-style', DEV_CSS . '/theme.css', array('huh-google-font'), '1.9' );
		wp_register_script( 'huh-script', DEV_JS ."/theme.js", array('jquery', 'huh-google-maps'), '1.5', true );
	} else {
		wp_enqueue_style( 'huh-style', DIST_CSS . '/theme.min.css', array('huh-google-font'), '1.9' );
		wp_register_script( 'huh-script', DIST_JS ."/theme.min.js", array('jquery', 'huh-google-maps'), '1.5', true );
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
		'page_title' => 'Einstellungen für die Webseite',
		'menu_title' => 'Theme Einstellungen',
		'menu_slug' => 'huh-theme-settings',
		'parent_slug' => 'options-general.php',
	);
	acf_add_options_sub_page($args);
	//Google Maps initialisieren
	acf_update_setting('google_api_key', 'AIzaSyDtvo159H5x0G9qus_ZJXIvaPy9vIEz7bM');
}
//add_action( 'acf/init', 'huh_acf_init' );
$args = array(
	'page_title' => 'Einstellungen für die Webseite',
	'menu_title' => 'Theme Einstellungen',
	'menu_slug' => 'huh-theme-settings',
	'parent_slug' => 'options-general.php',
);
acf_add_options_sub_page($args);
//Google Maps initialisieren
acf_update_setting('google_api_key', 'AIzaSyDtvo159H5x0G9qus_ZJXIvaPy9vIEz7bM');

/***************************************
 * Remove Menus from Backend
 ***************************************/
function huh_remove_menus() {
	remove_menu_page( 'edit.php' );
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'huh_remove_menus' );

/***************************************
 * 	Add Admin CSS und JS File
 ***************************************/
function huh_admin_style_scripts() {
	wp_enqueue_style( 'huh-admin-css', DIST_CSS.'/admin/huh-admin-css.css', null, '1.1' );
}
add_action('admin_enqueue_scripts', 'huh_admin_style_scripts');

/***************************************
 * 	Print Menu item
 ***************************************/
function huh_print_menu_items($menuitems, $class = '') {
	if($class != ''):
		$printclass = ' class="'.$class.'"';
	else:
		$printclass = '';
	endif;
	if(!empty($menuitems)):
		echo '<ul'.$printclass.' role="tablist">';
		foreach($menuitems as $menuitem):
			if(is_front_page()):
				echo '<li class="nav-item"><a class="nav-link" href="'.$menuitem->url.'">'.$menuitem->title.'</a></li>';
			else:
				echo '<li class="nav-item"><a class="nav-link" href="'.HOME_URI.$menuitem->url.'">'.$menuitem->title.'</a></li>';
			endif;
		endforeach;
		echo '</ul>';
	endif;
}

/***************************************
 * 	ACF Field mit Formularauswahlmöglichkeiten füllen
 ***************************************/
function huh_load_forms_to_acf_selectmenu( $field ) {
	$field['choices'] = array();
	$forms = GFAPI::get_forms();
	if(!empty($forms)):
		foreach($forms as $form):
			$field['choices'][$form['id']] = $form['title'];
		endforeach;
	endif;
	return $field;
}
add_filter('acf/load_field/name=front_s6_form_id', 'huh_load_forms_to_acf_selectmenu');
add_filter('acf/load_field/name=setting_course_subscribe_form_id', 'huh_load_forms_to_acf_selectmenu');