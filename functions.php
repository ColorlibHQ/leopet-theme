<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'LEOPET_DIR_URI' ) ) {
	define( 'LEOPET_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'LEOPET_DIR_ASSETS_URI' ) ) {
	define( 'LEOPET_DIR_ASSETS_URI', LEOPET_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'LEOPET_DIR_CSS_URI' ) ) {
	define( 'LEOPET_DIR_CSS_URI', LEOPET_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'LEOPET_DIR_JS_URI' ) ) {
	define( 'LEOPET_DIR_JS_URI', LEOPET_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'LEOPET_DIR_IMGS_URI' ) ) {
	define( 'LEOPET_DIR_IMGS_URI', LEOPET_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'LEOPET_DIR_ICON_IMG_URI' ) ) {
	define( 'LEOPET_DIR_ICON_IMG_URI', LEOPET_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'LEOPET_DIR_PATH' ) ) {
	define( 'LEOPET_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'LEOPET_DIR_PATH_INC' ) ) {
	define( 'LEOPET_DIR_PATH_INC', LEOPET_DIR_PATH . 'inc/' );
}

//Leopet Libraries Folder Directory
if ( ! defined( 'LEOPET_DIR_PATH_LIBS' ) ) {
	define( 'LEOPET_DIR_PATH_LIBS', LEOPET_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'LEOPET_DIR_PATH_CLASSES' ) ) {
	define( 'LEOPET_DIR_PATH_CLASSES', LEOPET_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'LEOPET_DIR_PATH_HOOKS' ) ) {
	define( 'LEOPET_DIR_PATH_HOOKS', LEOPET_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function leopet_admin_script(){
    wp_enqueue_style( 'leopet-admin', get_template_directory_uri().'/assets/css/leopet_admin.css', false, '1.0.0' );
    wp_enqueue_script( 'leopet_admin', get_template_directory_uri().'/assets/js/leopet_admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'leopet_admin_script' );



/**
 * Include File
 *
 */
require_once( LEOPET_DIR_PATH_INC . 'leopet-breadcrumbs.php' );
require_once( LEOPET_DIR_PATH_INC . 'leopet-widgets-reg.php' );
require_once( LEOPET_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( LEOPET_DIR_PATH_INC . 'post-like.php' );
require_once( LEOPET_DIR_PATH_INC . 'leopet-functions.php' );
require_once( LEOPET_DIR_PATH_INC . 'leopet-commoncss.php' );
require_once( LEOPET_DIR_PATH_INC . 'support-functions.php' );
require_once( LEOPET_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( LEOPET_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( LEOPET_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( LEOPET_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( LEOPET_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( LEOPET_DIR_PATH_HOOKS . 'hooks.php' );
require_once( LEOPET_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( LEOPET_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( LEOPET_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Leopet object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Leopet = new Leopet();