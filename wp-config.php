<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/html/church/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'church');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'pat1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '9Qt]+CKVk1LOCk&mBO8:+ )M(TL;fpV9B7B]Ut6@p%Gvdqs_Yi+fl>Rz<KIL1s~@');
define('SECURE_AUTH_KEY',  'W3]+S5E`{~Jk,/l;fX]zxl_|+.h0@uvNChhCB3 t@ 203/lc4p0UGeE8G:V^Ksc=');
define('LOGGED_IN_KEY',    'f@=C4&km9Ca^/J!le<X^H;p*;qkdq8y^wRzh%/M|+o^tLJ&^LF;,?_D]~fJn=,CZ');
define('NONCE_KEY',        '|~?Ez&bBhn.u5AHAUIJ6]@2I0y{hQgHz7Vh|B&oS4P:}eEust5P/ry(]~t3H}8%R');
define('AUTH_SALT',        '>M<:?A^=3,;+oCID1(biB~~j#c}QAglsY:QXQi$8Mj|,} +v2wmhp5t:Pji}z>Ov');
define('SECURE_AUTH_SALT', '*7(-Z,5|m%pz@#8kW$EG/BAl&q4/zK8Y]:nvhdoAAJs&M0_KomZs3&E>RJduia$r');
define('LOGGED_IN_SALT',   'r9`@L$E,MbZ.dSPL%^M$DN&1>|RT(T16tOfpW9,=J fWq5f6 Qo5UmvEt(GeibuP');
define('NONCE_SALT',       'e%L{Cq;03 ,d^v3l?rE?~J)EC(+-8Pd#u74<8J<.< R^ct#oQ 9R,H.9)H[1P<E9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'chhp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
