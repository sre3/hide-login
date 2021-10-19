## Changes
= 1.9 =
* Fix : redirect ajax add_to_cart

= 1.8.8 =
* Fix : redirect_url (Thanks Don)

= 1.8.7 =
* Fix : remove redirect in doing cron

= 1.8.6 =
* Tested up to 5.8 (please see entry v1.8.4 for rants)

= 1.8.5 =
* Fix : Force refresh permalinks update option 'whl_page'

= 1.8.4 =
* Tested up to 5.7 (what a brilliant achievement. you created a new version just because you tested a piece of software? who taught you about release management and coding?)

= 1.8.3 =
* Fix : remove WP_Review (that was never in my lite version, but hey, good to see, that you're learning)

= 1.8.2 =
* Fix notice "Notice: Trying to get property 'href' of non-object" (whereever that was ...)

= 1.8.1 =
* Fix fatal error with vendor wp-dismissible-notices-handler and wp-review-me (nope, not applicable for the lite version)

= 1.8 =
* Fix multisite subdomain for website menu (Thanks Eric Celeste)

= 1.7 =
* Fix vulnerability (Thanks Sebastian Schmitt) : Posting "post_password" with arbitrary content to /wp-login.php reveals the normal wordpress login page. (You "fixed" it by checking for an additonal GET parameter?)

= 1.6.1 =
* Fix : loopback request site-health

= 1.6 =
* Tested up to 5.6
* Add compatibility with PHP8 (which I can't find anywhere in the actual code; maybe it's in the Composer stuiff, which I stripped, so useless).

= 1.5.7 =
* Fix: Text Domain Issue (which is totally useless, because the Lite version does not make use of translation, because the translation is fucked). 

= 1.5.6 =
* Fix: flush rewrite rules after install or update option
* Tested up to 5.4

= 1.5.5 =
* Add filter to redirect in cases where the user is already logged in.
* Fix: add rawurldecode for all $_SERVER['REQUEST_URI'] (Thanks @nintechnet)

1.5.4.2
* Fix: changed check of deprected function icl_object_id to wpml_object_id

1.5.4.1
* Fix: home_url / site_url

1.5.4
* Fix: Compatibility with WPML (Thanks @susansiow)

1.5.3
* Fix: Security vulnerabilities (Thanks @juliobox)

1.5.2.2
* Tested up to 5.2
* Fix: Domain language

1.5.2.1
* Fix: Notice: Undefined index: query
* Remove: 111KB of bullshit.

1.5.2
* Fix: Action URL wp_send_user_request()

1.5.1
* Fix: Action URL get_the_password_form()

1.5
* Enhancement: Add custom redirection URL

1.4.5
* Fix: function wp_login_url on page 404 now returns an empty link

1.4.4
* Fix: Too many redirects when a user clicks “Log in with WordPress.com”

1.4.3
* Fix: Fatal Error with multisite WP

1.4.2
* Fix: Error with library for compat WordPress and PHP

1.4.1
* Fix: Remove message review if PHP is too old

1.4
* Enhancement code with composer, namespace and autoload

1.3.4.2
* Fix: Remove message review if PHP is too old

1.3.4.1
* Fix: Deprecated method

1.3.4
* Add: Review message
* Fix: Redirect url wp-admin/options.php

1.3.3
* Add: Filter hook for enable wp-signup (@sumobi)

1.3.2
* Fix: Encoding of the login with a space in the emails

1.3.1
* Fix: redirect change admin email

1.3
* Fix: redirect wp-register.php

1.2.7
* Enhancement for Woocommerce email notification

1.2.6.1
* Revert redirect after login

1.2.6
* Fix: redirect after login

1.2.5.1
* Fix: add action in hook activate

1.2.5
* Remove: redirect activate

1.2.4
* Remove: Third party wpserveur

1.2.3.1
* Enhancement: Add translations cs_CZ, da_DK, es_ES, it_IT, ru_RU
* Fix: Parse error classes/plugin.php l.530

1.2.3
* Fix: change 403 to 404 error on wp-admin
* Fix: activate plugin
* Enhancement: Third party wpserveur

1.2.2
* Enhancement: Compatibility 4.9.x

1.2.1
* Enhancement: Prevent access to the login page by using the URL encoded version of wp-login.php

1.2
* Enhancement: Prevent redirection to login URL when accessing /wp-admin/customize.php directly
* Enhancement: Redirect to admin URL when already logged-in and accessing login URL without the action query string

1.1.7
* Fix: change fake 404 on wp-admin when not logged-in to a 403 forbidden to prevent fatal errors with various themes & plugins

1.1.6
* Fix: bug with Yoast SEO causing a Fatal Error and blank screen when loading /wp-admin/ without being logged-in

1.1.5
* Fix: Stop displaying the new login url notice everywhere when settings are updated (thanks @ kmelia on GitHub)
* Improvement: better way of retrieving the 404 template

1.1.4
* Fix: bypass the plugin when $pagenow is admin-post.php

1.1.3
* Fix: issue if no 404 template in active theme directory

1.1.2
* Modified priority on hooks to fix a problem with some configurations

1.1.1
* Check for Rename wp-login.php activation before activating WPS Hide Login Lite to prevent conflict

1.1
* Fix: CSRF security issue when saving option value in single site and multisite mode. Thanks to @Secupress
* Improvement: changed option location from permalinks to general, because register_setting doesn't work on permalinks page.
* Improvement: notice after saving is now dismissible (compatibility with WP 4.2)
* Uninstall function is now in it's separate file uninstall.php
* Some cleaning and reordering of code

1.0
* Initial version. This is a fork of the Rename wp-login.php plugin, which is unmaintained https://wordpress.org/plugins/rename-wp-login/. All previous changelogs can be found there.
