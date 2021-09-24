<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'with_leon' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ibgeQp@dVUWkGReA:jv]TY_EAIn}oCiW:62c_<8Af-%3~cRKT]CWi`U)rSl9lg*;' );
define( 'SECURE_AUTH_KEY',  '1+-5Tl-2k%IZRvb}Ev>W`e>. y~d]LBlK.D9X?z+(_b>nd&lA]|kjHt.Yd]~!19B' );
define( 'LOGGED_IN_KEY',    'y^v?s+/@98l.]KgPVExGJaX/Hu,qjir2;X8Yrz[M~<`n2u=x1f3b6GlK`8f`^[x3' );
define( 'NONCE_KEY',        'UQ$<)59f16n-wR4J_2:?CXB<-Sc;lmWmb-d5hf863]=0xO9^cxUL2Xz})Z99HzD7' );
define( 'AUTH_SALT',        '2B,y~K;{pacNz%2bacA?-YK{cs!1OjV4VczT0#X8TLle7`u0:/eA{-%AH>go2e1*' );
define( 'SECURE_AUTH_SALT', '/2oKN,WXW 1oW uS)CY)Y?lUytg:Nl[<X?zQLoHI,,[s: AY6{Wcm?~t?9gSp;j+' );
define( 'LOGGED_IN_SALT',   '.-7EsCTUQ{LHM/Q}cjB2hj[ lpa`GDM@)85>;IEXU?ekM%}AT7p)>ZChfB8tgoN~' );
define( 'NONCE_SALT',       '=JS@lC2[}1^V-UJ6:8*y!&ya6YuS0Ol-0^]n*Lz+X2tr (P#i|x]8bq-_):!ZEVp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
