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
define( 'DB_NAME', 'onlinenews' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'twl]#%T^9su*8P, niCn$Yb=79n cu1OciBc5MV0W`$|Rz{|Z2tL%y)2[tl*1`kd' );
define( 'SECURE_AUTH_KEY',  'g!l4j(],D4SUBbNa@y0-NW>yd)tm=4D!)nj2Z<sk7<gE|yAP:[2ZUnGif`AuUn~k' );
define( 'LOGGED_IN_KEY',    'fcY>C:G,+ l}=0ZqmF1D??bf1TfSlz<Nj84*vAK@/[c5YpQwir/]U5 q!|]Fs!<E' );
define( 'NONCE_KEY',        ')UL&Kn`>y&2;-hW.f$6ZtH,P,5VBIKHd=;5f$6f0|RW7?tjMP38$Y(Z+!dE$KqVW' );
define( 'AUTH_SALT',        'A;).2Ukyjd5)bP7m ziqK`@P:%xLIlZ#5R@{1C%eypz?U#2~(df9vJHX-yWN@)f{' );
define( 'SECURE_AUTH_SALT', 'L1QHq<(^8}E&FXjg$>X__dsh{1?J*(uwE(P.Ov=.FkQZ7(`5e*vyTu/O@Oc(/c#5' );
define( 'LOGGED_IN_SALT',   'pdms[=WVhuT!l`|{-<VN9)3C_q||^3<UA,I[2fMYR=N]o8[k9iNF({KXQLkB1n5`' );
define( 'NONCE_SALT',       '~6d0mCC|w+8j7BDdGA4{p]jo!:#4RgjNci-C^Y&rC@NH}KH-$2jc]kIT7X^}tKr,' );

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
