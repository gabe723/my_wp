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

// wp-admin pw: G0otXxSmde#%3LPX9J

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gabe_portfolio');

/** MySQL database username */
define('DB_USER', 'gn_portfolio');

/** MySQL database password */
define('DB_PASSWORD', 'KV3Pb9N4NcvcNBkM');

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
 define('AUTH_KEY',         '-~Qss:M|kvb+}1<~-gK[V2v_hH(W)GH?_VJ?M/>D9,dm$[V5~jgL6 C#,QtYe3Au');
 define('SECURE_AUTH_KEY',  'h#zKos8e45ofk-bqpY$g)PeOIE<(@S=%r?gG5Yy2m?s(Eo`2x7L^5Y*E+I<L-&<#');
 define('LOGGED_IN_KEY',    '#zcibJ_4]kp5=W|Wx$;:B~oq]uBS/c`^(9rmy|J+yRnUmK}+=J/WXRBQG&uxP|pV');
 define('NONCE_KEY',        'Z7+VraE1mH6-7+bz)0Z{$`Oqvfpzpx;is-3URJ+076m#yA,s<0feH+$s9Er3LbBR');
 define('AUTH_SALT',        'wpec>[gKt|sty1Ug1thNjCQS*!sld+aW23EPK:~!~DhLXmLI#aPHR|7uhGe&rX6y');
 define('SECURE_AUTH_SALT', 'd3(sT!b35+8ojB^`iK9Dx-6J)qG2LkEM$:u(CmYS|WT9zN?zc9T(eg4&=-l/<J@#');
 define('LOGGED_IN_SALT',   ',y[%Kq]uP_W`m-X-;[I`Peu 0DY|C_l-Rg4N?kwnQ(d-yB)l),bN{d}/4;0[|kou');
 define('NONCE_SALT',       'x+O|X>.(3lng-Y][*/|#orJwL=8CEAkTP4I_+p`#u+vI-|,DW~Ew6SIEks.c%k|`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gudgfxzbz1DVDSFiu';

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
