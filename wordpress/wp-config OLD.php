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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'r{2_nFNH:EpQ=!Kq*;~c.c7}WZ>-!4HH}G#q}fIhVz1~$zWDql:{2RDZs|6NWZJ-');
define('SECURE_AUTH_KEY',  'B(F8QehnvWh3^(ZL-&ffC--@<c|i/eY`,`x|h~-9Lxn*t)t:BegdEI]t^SFgxJ)>');
define('LOGGED_IN_KEY',    '7;y[@|:{LejExMeHI,ilF|8;8x~H>+mj]8g,?VTL&ucpN-8/in3s6az`N*XWjvN2');
define('NONCE_KEY',        'nOV#y<DU`Y_.p{Viu]?:-7l|2&G0$TYrqzN9rVLC+y|IcAb!});g>ocfTLp,,5ON');
define('AUTH_SALT',        '&|L `|  `Pbhzp_lpUyyd_h:q$PBxP~M[`@lLLeh?iQ=}2K{]-=*qPc8T+~fP3-(');
define('SECURE_AUTH_SALT', '3iaJ4{wZT1[+EpJ_s([n,-T).&+/7U!2M#q2o]H6A)AzcZ|TkI.<&.B0*j~|Q<|9');
define('LOGGED_IN_SALT',   '4.D2.;~7?{N4CkzZg.,Ed1 d5y;tH>(]/<*CnVG|*i&gWs.czvaKWyd5f_wqR4*y');
define('NONCE_SALT',       'M+Ev^xfDG:D.hd =7Hq_BtP8V;B||A.DKA7#l-#_75g pG(# Q0 B;h=@N^_7u5!');

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
