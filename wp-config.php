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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
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
define( 'AUTH_KEY',         'JOFx6MdQ#z/O]{}S-ndEV3xK@?b,@j)3-<#m-_XbWmb7lWlS=s;VTnpn.]$+~eiq' );
define( 'SECURE_AUTH_KEY',  'dF.|P]S>ty9j?x<i;SyqTgEhn8lOc)>UrbO X(o>_R+Q7/IqIhp?q>wrwp?NhP6k' );
define( 'LOGGED_IN_KEY',    '1:wo^YrG%bx=F jfI(ZbE1e6M.p+:C 99@^~[d9yS3PlN/MiQpKtFG_X!*(eT]cO' );
define( 'NONCE_KEY',        'bx;v~qGR6)z+3&W(D<!KM;:]{O}TYY|fG-6y*9$MSv(SBTvvLe#sS[h!ZP^a,r1.' );
define( 'AUTH_SALT',        'jmX4eE!Y-&7GkSHv<F+On/;mP>W*hA<kUp3tydH4pX].|xb6>ZfS/<qO2:O{NH!z' );
define( 'SECURE_AUTH_SALT', '#c2]fVJ0Rc`YT,n`7Og]2cy-M#Wq@1 cYQ3XvsXFLZO}02|`j.i+G8%ORoHF{,T1' );
define( 'LOGGED_IN_SALT',   '9iI=wCo0!Ut[7lY=|2e{-S%Gy EU[O{=Xl:[ov&Y781@LUw`jYD!c{d)f}bnwQoA' );
define( 'NONCE_SALT',       'GTPwDG2wVD, -nZJ64yR{k{9HXs4M&H:C^4A/XL=GX(ynus?!&q.o4.]JY@b[x*y' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define('WP_DEBUG_LOG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
