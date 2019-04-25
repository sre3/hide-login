=== WPS Hide Login Lite ===

Contributors: tabrisrp, nicolaskulka, nrekow
Tags: rename, login, wp-login, wp-login.php, custom login url, jetpack
Requires at least: 4.1
Tested up to: 5.1
Requires PHP: 7.0
Stable tag: 1.5.2.1
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Change wp-login.php to anything you want.

== Description ==

This lite version is based on WPS Hide Login 1.5.2.1, but with all bullshit removed.

The plugin lets you easily and safely change the url of the login form page to anything you want. It doesn’t literally rename or change files in core, nor does it add rewrite rules. It simply intercepts page requests and works on any WordPress website. The wp-admin directory and wp-login.php page become inaccessible, so you should bookmark or remember the url. Deactivating this plugin brings your site back exactly to the state it was before.

= Compatibility =

Requires WordPress 4.1 or higher. All login related things such as the registration form, lost password form, login widget and expired sessions just keep working.

It’s also compatible with any plugin that hooks in the login form, including:

* BuddyPress,
* bbPress,
* Jetpack,
* Limit Login Attempts,
* and User Switching.

Obviously it doesn’t work with plugins or themes that *hardcoded* wp-login.php.

Works with multisite, with subdomains and subfolders. Activating it for a network allows you to set a networkwide default. Individual sites can still rename their login page to something else.

If you’re using a **page caching plugin** other than WP Rocket, you should add the slug of the new login url to the list of pages not to cache. WP Rocket is already fully compatible with the plugin.

For W3 Total Cache and WP Super Cache this plugin will give you a message with a link to the field you should update.

== Installation ==

1. Download plugin.
2. Unpack files.
3. Upload files to your server.
4. Activate the plugin.
5. Go to settings to change your login url.
