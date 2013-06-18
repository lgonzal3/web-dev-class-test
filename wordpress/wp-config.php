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
define('DB_NAME', 'webdevclasstest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ')6$^k4d-9saReKU!-JH-!9[!0KX/bg_u&Px98?Y[7OXp[/8:I&yILe3oKQj;*4e4');
define('SECURE_AUTH_KEY',  'pL|M!A~cBp`?0eG8B/%BkkAi=ut!+y4I-2_VxRhVSL.H,W(H-5VrRrLt=h kko>%');
define('LOGGED_IN_KEY',    '_F0 }MB^va26Hya2u=!F2/8|al>-)&3~+chFD**{f=JS[]].9=B[>:m&`<a>uE#Q');
define('NONCE_KEY',        'd[S<6&F&-8fpH.zW8-{CCpTBrNM2>H?AJ-Zpe|>=;:SG!9i|ZUE;5F;~AfOfv=y6');
define('AUTH_SALT',        'f)M3y`@$a`h|aOaMu.VBV:?Rw5?kg{R%;o];}Ho_`Vv<.-_,&:&nUxIqhe`pC~)A');
define('SECURE_AUTH_SALT', 'HCoe-IZpyF]5!-|p)On04(G zR~PDSh6{SNb?@VoZ~T|]-`0(1M Kk3o#.am!=0f');
define('LOGGED_IN_SALT',   '1Y-D=MG5?fqXXHv~y;ucElw+Z-fa]]J_zI-*NOjrMhLD[}^B{WS,1jG.-f6]Fqk+');
define('NONCE_SALT',       'xR/owGvSm?QM3@Xw=AvU-BAUOT7mPX.i83PdnGGOn$3SwRmG< <~0>s%}2l#U7-E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
