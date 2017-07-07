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
/* wp pw: 0*VJr1e1gOn6(wDe$y */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gabe_portfolio');

/** MySQL database username */
define('DB_USER', 'gn_portfolio');

/** MySQL database password */
define('DB_PASSWORD', '2d3gQi6j9C2de2QX');

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
 define('AUTH_KEY',         'anf^oSmfuD-0|i,GY^{rj}fFyYm0?*`9JPb+|v|dCobZmHe+%Xb#q&SZ&qPU;{5<');
 define('SECURE_AUTH_KEY',  '&RXfC`uk-[;u&cU.-r@-.~`Uga<6?+-gsI/DjbL)0,yu12;*/D.]7(0,ysZ.Rjw=');
 define('LOGGED_IN_KEY',    'pf)7+Xo6AD+R?%3Xu~K4?=6P|,V=W&T+N2W|-*2&rTuH^65_d/!7]F7G_,I|&/:p');
 define('NONCE_KEY',        'H)Q,AH++T[iAq+~:Ph@|YuI2#-X0+ Ed59@dEYkp&|*>V6p@4*[`6bljG;,zIISW');
 define('AUTH_SALT',        'EUXDwxWhsZVbv^oSTNv*6.5D3I>mpmM[dF]g|VoW1T/FOlU7pzgqF[ @m1T{^m<X');
 define('SECURE_AUTH_SALT', 'Bv8Vh^w8hn [|-;J9`CqiwKCq,y#V?I|Oe*-iJRr(q>vA.%nOT=0(gY*?i0GOwe6');
 define('LOGGED_IN_SALT',   'KFoV7.TpS%=z+BlU7OH^<<J?i-YdMlVMkjcK3Kb.*k_[&P5UD+sm]T[<RZ{)Sl;7');
 define('NONCE_SALT',       'S-:8v9vA4y1{b,}ShHC%)hj-|S@a)+wT|xvN*{rch7/Iotr>>cs-Q{ZV_H>wMKC]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ghjvk84hbk1jbhuj9_';

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
