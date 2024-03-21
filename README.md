# Hide Login

Contributors: sre3, WPServeur, nicolaskulka, wpformation, nrekow  
Requires at least: 4.1  
Tested up to: 6.4.3  
Requires PHP: 7.0  
Stable tag: 1.0.0  
License: GPLv3 or later  
License URI: https://www.gnu.org/licenses/gpl-3.0.html

## Description 

Hide Login is based on the WPS Hide Login plugin for WordPress, but with all bullshit removed. It is a very light plugin that lets you easily and safely change the url of the login form page to anything you want. It doesn’t literally rename or change files in core, nor does it add rewrite rules. It simply intercepts page requests and works on any WordPress website. The wp-admin directory and wp-login.php page become inaccessible, so you should bookmark or remember the url. Deactivating this plugin brings your site back exactly to the state it was before.

## Compatibility 

Requires WordPress 4.1 or higher. All login related things such as the registration form, lost password form, login widget and expired sessions just keep working.

It’s also compatible with any plugin that hooks in the login form, including:

* BuddyPress,
* bbPress,
* Jetpack,
* WPS Limit Login,
* and User Switching.

Obviously it doesn’t work with plugins or themes that *hardcoded* wp-login.php.

Works with multisite, with subdomains and subfolders. Activating it for a network allows you to set a networkwide default. Individual sites can still rename their login page to something else.

If you’re using a **page caching plugin** other than WP Rocket, you should add the slug of the new login url to the list of pages not to cache. WP Rocket is already fully compatible with the plugin.

For W3 Total Cache and WP Super Cache this plugin will give you a message with a link to the field you should update.

## Installation

1. Upload `sre3-hide-login.zip` using the `Add Plugins` menu.
2. Activate the plugin through the `Plugins` menu in WordPress.
3. Go to `Settings -> Hide Login` to change your login url.

## Changelog

### 1.0.0
* Initial release. Based on WPS Hide Login v1.9.13.2
