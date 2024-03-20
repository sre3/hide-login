<?php
/*
 Plugin Name: Hide Login
 Description: Protect your website by changing the login URL and preventing access to wp-login.php page and wp-admin directory while not logged-in.
 Author: sre3
 Author URI: https://sre303.net
 Version: 1.0.0
 Requires at least: 4.1
 Tested up to: 6.0
 Requires PHP: 7.0
 License: GPLv3
 License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

// Don't load directly
if (!defined('ABSPATH')) {
	die();
}


// Plugin constants
define( 'HIDE_LOGIN_VERSION', '1.0.0' );
define( 'HIDE_LOGIN_FOLDER', 'sre3-hide-login' );

define( 'HIDE_LOGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'HIDE_LOGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'HIDE_LOGIN_BASENAME', plugin_basename( __FILE__ ) );

// Function to easily include files.
function sre3_hide_login_load_files( $dir, $files, $prefix = '') {
	foreach ($files as $file) {
		if (is_file($dir . $prefix . $file . '.php')) {
			require_once $dir . $prefix . $file . '.php';
		}
	}
}


// Plugin client classes
sre3_hide_login_load_files( HIDE_LOGIN_DIR . 'classes/', array('singleton', 'plugin') );


// Activation hook
register_activation_hook( __FILE__, array( '\sre3\Hide_Login\Plugin', 'activate' ) );

function plugins_loaded_sre3_hide_login_plugin() {
	\sre3\Hide_Login\Plugin::get_instance();
}
add_action( 'plugins_loaded', 'plugins_loaded_sre3_hide_login_plugin' );
