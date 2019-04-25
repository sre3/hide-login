## Changes
1.5.2.1
* Fix : Notice: Undefined index: query
* Remove: 111KB of bullshit.

1.5.2
* Fix : Action URL wp_send_user_request()

1.5.1
* Fix : Action URL get_the_password_form()

1.5
* Enhancement: Add custom redirection URL

1.4.5
* Fix : function wp_login_url on page 404 now returns an empty link

1.4.4
* Fix : Too many redirects when a user clicks “Log in with WordPress.com”

1.4.3
* Fix : Fatal Error with multisite WP

1.4.2
* Fix : Error with library for compat WordPress and PHP

1.4.1
* Fix : Remove message review if PHP is too old

1.4
* Enhancement code with composer, namespace and autoload

1.3.4.2
* Fix : Remove message review if PHP is too old

1.3.4.1
* Fix : Deprecated method

1.3.4
* Add : Review message
* Fix : Redirect url wp-admin/options.php

1.3.3
* Add : Filter hook for enable wp-signup (@sumobi)

1.3.2
* Fix : Encoding of the login with a space in the emails

1.3.1
* Fix : redirect change admin email

1.3
* Fix : redirect wp-register.php

1.2.7
* Enhancement for Woocommerce email notification

1.2.6.1
* Revert redirect after login

1.2.6
* Fix : redirect after login

1.2.5.1
* Fix : add action in hook activate

1.2.5
* Remove : redirect activate

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
* Fix : CSRF security issue when saving option value in single site and multisite mode. Thanks to @Secupress
* Improvement : changed option location from permalinks to general, because register_setting doesn't work on permalinks page.
* Improvement : notice after saving is now dismissible (compatibility with WP 4.2)
* Uninstall function is now in it's separate file uninstall.php
* Some cleaning and reordering of code

1.0
* Initial version. This is a fork of the Rename wp-login.php plugin, which is unmaintained https://wordpress.org/plugins/rename-wp-login/. All previous changelogs can be found there.
