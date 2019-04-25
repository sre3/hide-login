=== WPS Hide Login Lite ===

Contributors: tabrisrp, nicolaskulka, nrekow
Tags: rename, login, wp-login, wp-login.php, custom login url
Requires at least: 4.1
Tested up to: 4.9
Stable tag: 1.0
Based on: WPS Hide Login 1.3.4.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Change wp-login.php to anything you want.

== Description ==

*WPS Hide Login Lite* is a very light plugin that lets you easily and safely change the url of the login form page to anything you want. It doesn’t literally rename or change files in core, nor does it add rewrite rules. It simply intercepts page requests and works on any WordPress website. The wp-admin directory and wp-login.php page become inaccessible, so you should bookmark or remember the url. Deactivating this plugin brings your site back exactly to the state it was before.

= Compatibility =

Requires WordPress 4.1 or higher. All login related things such as the registration form, lost password form, login widget and expired sessions just keep working.

It’s also compatible with any plugin that hooks in the login form, including:

* BuddyPress,
* bbPress,
* Limit Login Attempts,
* and User Switching.

Obviously it doesn’t work with plugins or themes that *hardcoded* wp-login.php.

Works with multisite, but not tested with subdomains. Activating it for a network allows you to set a networkwide default. Individual sites can still rename their login page to something else.

If you’re using a **page caching plugin** other than WP Rocket, you should add the slug of the new login url to the list of pages not to cache. WP Rocket is already fully compatible with the plugin.

For W3 Total Cache and WP Super Cache this plugin will give you a message with a link to the field you should update.

== Installation ==

1. Go to Plugins › Add New.
2. Search for *WPS Hide Login Lite*.
3. Look for this plugin, download and activate it.
4. The page will redirect you to the settings. Change your login url there.
5. You can change this option any time you want, just go back to Settings › WPS Hide Login Lite.
