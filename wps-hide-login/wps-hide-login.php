<?php
/*
 Plugin Name: WPS Hide Login Lite
 Description: Protect your website by changing the login URL and preventing access to wp-login.php page and wp-admin directory while not logged-in. This lite version is based on the latest version of WPS Hide Login, but with all bullshit removed.
 Author: NicolasKulka, tabrisrp, nrekow
 Author URI: https://rekow.ch
 Version: 1.5.6.1
 Requires at least: 4.1
 Tested up to: 5.4
 Requires PHP: 7.0
 License: GPLv3
 License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

// Don't load directly
if (!defined('ABSPATH')) {
	die();
}


// Plugin constants
define( 'WPS_HIDE_LOGIN_VERSION', '1.5.6.1' );
define( 'WPS_HIDE_LOGIN_FOLDER', 'wps-hide-login' );

define( 'WPS_HIDE_LOGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WPS_HIDE_LOGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WPS_HIDE_LOGIN_BASENAME', plugin_basename( __FILE__ ) );

// Function to easily include files.
function wps_hide_login_load_files( $dir, $files, $prefix = '') {
	foreach ($files as $file) {
		if (is_file($dir . $prefix . $file . '.php')) {
			require_once $dir . $prefix . $file . '.php';
		}
	}
}


// Plugin client classes
wps_hide_login_load_files( WPS_HIDE_LOGIN_DIR . 'classes/', array('singleton', 'plugin') );


// Activation hook
register_activation_hook( __FILE__, array( '\WPS\WPS_Hide_Login\Plugin', 'activate' ) );

function plugins_loaded_wps_hide_login_plugin() {
	\WPS\WPS_Hide_Login\Plugin::get_instance();
}
add_action( 'plugins_loaded', 'plugins_loaded_wps_hide_login_plugin' );
