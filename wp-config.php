<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zabin' );

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
define( 'AUTH_KEY',         'kRQ&j*S1R:eszxrba4ffLf~/!58JC!DmhNkt.n2f+V|/cK?GkZ.v2)B~]z^Qhi1G' );
define( 'SECURE_AUTH_KEY',  '3 BvMKW?{&n`4R,t[oBFSXJBy{%o9T4y2D/%AF0awsOCH`}f9s@gLr%5]=Yjt[;S' );
define( 'LOGGED_IN_KEY',    'A:C:1q-%YPYU@0UN]w rnT2=LPpx]Mf_m``Z};R,]e J#>&ioc;Kqd_5C~KQQM=t' );
define( 'NONCE_KEY',        'v9SzJK;o4I.[6l%#%Xi^UgU>6SLvy:N%/{5ho$1Pc)cIj;F.hidk[*:|CH~e+0ds' );
define( 'AUTH_SALT',        '6BVT0=?hDP<=|1y-k=*^m|koRp-87W+z]/!Vi-49a7;nv+D9=)Lq_;6Vo48?Vd9?' );
define( 'SECURE_AUTH_SALT', '3_{jvTf[1X2LO+vi9Hq(u STpP]A;WzTZW7?^B/?}Nljx^5dgSBU+Y7d!5thlgpy' );
define( 'LOGGED_IN_SALT',   'e<;b>(h_#E0zFm*;lnJ59i30O0WG32.m#ECkoUE*ePf]WaC*#W-V8h%L94(hZq2e' );
define( 'NONCE_SALT',       '_,}p8P@E;!4o*11sl+ZEGFVh)1|X[1dy/[qs U?Pnin.D;)T9%`D6P(B{Z=:}iA3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
