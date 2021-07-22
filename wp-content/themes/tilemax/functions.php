<?php
/**
 * Theme Functions
 *
 * @package DTtheme
 * @author DesignThemes
 * @link http://wedesignthemes.com
 */
define( 'TILEMAX_THEME_DIR', get_template_directory() );
define( 'TILEMAX_THEME_URI', get_template_directory_uri() );
define( 'TILEMAX_CORE_PLUGIN', WP_PLUGIN_DIR.'/designthemes-core-features' );

if (function_exists ('wp_get_theme')) :
	$themeData = wp_get_theme();
	define( 'TILEMAX_THEME_NAME', $themeData->get('Name'));
	define( 'TILEMAX_THEME_VERSION', $themeData->get('Version'));
endif;

/* ---------------------------------------------------------------------------
 * Loads Kirki
 * ---------------------------------------------------------------------------*/
require_once( TILEMAX_THEME_DIR .'/kirki/index.php' );

/* ---------------------------------------------------------------------------
 * Loads Codestar
 * ---------------------------------------------------------------------------*/
require_once TILEMAX_THEME_DIR .'/cs-framework/cs-framework.php';

if( !defined( 'CS_ACTIVE_TAXONOMY' ) ) { define( 'CS_ACTIVE_TAXONOMY',   false ); }
define( 'CS_ACTIVE_SHORTCODE',  false );
define( 'CS_ACTIVE_CUSTOMIZE',  false );

/* ---------------------------------------------------------------------------
 * Create function to get theme options
 * --------------------------------------------------------------------------- */
function tilemax_cs_get_option($key, $value = '') {

	$v = cs_get_option( $key );

	if ( !empty( $v ) ) {
		return $v;
	} else {
		return $value;
	}
}

/* ---------------------------------------------------------------------------
 * Loads Theme Textdomain
 * ---------------------------------------------------------------------------*/ 
define( 'TILEMAX_LANG_DIR', TILEMAX_THEME_DIR. '/languages' );
load_theme_textdomain( 'tilemax', TILEMAX_LANG_DIR );

/* ---------------------------------------------------------------------------
 * Loads the Admin Panel Style
 * ---------------------------------------------------------------------------*/
function tilemax_admin_scripts() {
	wp_enqueue_style('tilemax-admin', TILEMAX_THEME_URI .'/cs-framework-override/style.css');
}
add_action( 'admin_enqueue_scripts', 'tilemax_admin_scripts' );

/* ---------------------------------------------------------------------------
 * Loads Theme Functions
 * ---------------------------------------------------------------------------*/

// Functions --------------------------------------------------------------------
require_once( TILEMAX_THEME_DIR .'/framework/register-functions.php' );
require_once( TILEMAX_THEME_DIR .'/framework/utils.php' );

// Header -----------------------------------------------------------------------
require_once( TILEMAX_THEME_DIR .'/framework/register-head.php' );

// Menu -------------------------------------------------------------------------
require_once( TILEMAX_THEME_DIR .'/framework/register-menu.php' );
require_once( TILEMAX_THEME_DIR .'/framework/register-mega-menu.php' );

// Hooks ------------------------------------------------------------------------
require_once( TILEMAX_THEME_DIR .'/framework/register-hooks.php' );

// Post Functions ---------------------------------------------------------------
require_once( TILEMAX_THEME_DIR .'/framework/register-post-functions.php' );
new tilemax_post_functions;

// Widgets ----------------------------------------------------------------------
add_action( 'widgets_init', 'tilemax_widgets_init' );
function tilemax_widgets_init() {
	require_once( TILEMAX_THEME_DIR .'/framework/register-widgets.php' );
}

// Plugins ---------------------------------------------------------------------- 
require_once( TILEMAX_THEME_DIR .'/framework/register-plugins.php' );

// WooCommerce ------------------------------------------------------------------
if( function_exists( 'is_woocommerce' ) ){
	require_once( TILEMAX_THEME_DIR .'/framework/register-woocommerce.php' );
}

// WP Store Locator -------------------------------------------------------------
if( class_exists( 'WP_Store_locator' ) ){
	require_once( TILEMAX_THEME_DIR .'/framework/register-storelocator.php' );
}

// Register Gutenberg -----------------------------------------------------------
require_once( TILEMAX_THEME_DIR .'/framework/register-gutenberg-editor.php' );


// Khoi custom code
add_shortcode("kt_custom_sc","kt_custom_sc_handle");
function kt_custom_sc_handle () {
	ob_start();
	?>
	<p>This is Khoi custom shortcode</p>
	<?php
	$result = ob_get_contents();
	ob_end_clean();
	return $result;
}





