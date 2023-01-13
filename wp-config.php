<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '8%5]b&Ut<7LPo|~HDUuc}.8uka[.3bYevg2+_n>&Ya_nr=Jl~Q<G0[%wHlT9no.&' );
define( 'SECURE_AUTH_KEY',  '%<-PH{1#1?3Mji%@4dm(j1CEeu{-Wgi#F/I^(5Kt:uf$q*q`oUdcUySIONpC]nmU' );
define( 'LOGGED_IN_KEY',    '/oex31$xYD{9k!zxQz5fay2s4s;=MsAo(91]_kDSkun?uHAZ_M^mJ+tOQN]Rl]I}' );
define( 'NONCE_KEY',        '}Kzk5.h&uif3tJ%#8HZX,j^c-w1I:Nz3L4pEY bvZS:0*]_OSXT;_)lD-l47a$sl' );
define( 'AUTH_SALT',        ';Np]YXb|zf9%`*`AcCCb$4cb-Hhc!W<]vhfx`]5Eki9`yz?xLL^* ?ijT4t4f`j2' );
define( 'SECURE_AUTH_SALT', 'W#x8$/];Hv;#jLw8bN0|VpJ7_~Xegp@0g@DR_Xo*]VZ^$x6ryFKt3^@|9X4IUs9l' );
define( 'LOGGED_IN_SALT',   '2)rj30eTrC$M%ls_`zRQKev#?>*tGguFZ{$FP/,sVIZ^707qfAl}AKow]o)Gf!~F' );
define( 'NONCE_SALT',       '^nfDP1UzX<~r<]8qAE]jKc/Ww*/j)/]zwB)[ANG,gQX54tcvyhc^X9F#HQ# U,cz' );

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
