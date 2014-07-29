<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cncrg');

/** MySQL database username */
define('DB_USER', 'ls_cncrge');

/** MySQL database password */
define('DB_PASSWORD', '##abc@123');

/** MySQL hostname */
define('DB_HOST', 'sql.corporateidentitysolutions.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-O}]CGKCb+sT6.d-EuPu;Y/xh%sHM+wtioLWopu{a.$a5)Y{%=G.=i:aO|G5:4Hj');
define('SECURE_AUTH_KEY',  '<F>_Q1E1Z:-=.%>#?jq$V.5*u$go ` r)/Nu?i+AfKt4+#DG2xK7gH~0 ~*24E!8');
define('LOGGED_IN_KEY',    '(rdRKo%!Gg%_EWzeL-042i`=;ppK|3x9w*+_zq[A[ev/WNK?Y$RNC>+kD0i`v2rJ');
define('NONCE_KEY',        '~-6!nd#y>%,<uN<f4w&~E^|7A=QCTF|*^?j+rRv_7u22T}0+t4z@y `x+vFJIG(/');
define('AUTH_SALT',        'Z$+$l]:S]>#fbaH2M$_?v:1`Cw _1)pR*Z8iJZw:opQ.ZTUhp4Y88H_+%!&l--@o');
define('SECURE_AUTH_SALT', 'D`rb(}VVS=[p]??N|&Kk9l6#Kz`^ST`3;-?:|;|N+0[Ld|nWd[nfl1!J&.S|`eIc');
define('LOGGED_IN_SALT',   'r9ZGfGTw~|8+13hN!;Qa@4xT0f;+&4cRYq^5A{gL]{=,Yxm+$}S&BUI]Nrj28MZX');
define('NONCE_SALT',       'Zc=]/tvq[.q@_S$Pd-U`}^~&)o4$@uQu-)+1 zXj*hju=nAU@fc/0t +kvI[9a|/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wrdp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
