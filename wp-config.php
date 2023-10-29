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
define( 'DB_NAME', 'hotel' );

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
define( 'AUTH_KEY',         'YLV+=<Y7Xr$+Q:)4It_:U.X=owbs+gc()!R@2:jLJ5kEGG*.e9vmmtxVAanW%sV-' );
define( 'SECURE_AUTH_KEY',  '@o9JR;]8-5R:NIz$C>${L1F:(Z#FvsI,N/N,!X0{}++yKMUs[LK(pZJkmB!?5e*e' );
define( 'LOGGED_IN_KEY',    ';]zEp7R^eBt89|wo{k<p5&84BKnuL|.:)j)K.>HkzyTWuxQ~{Fp.O.iwa0P4$$Ct' );
define( 'NONCE_KEY',        'O_N 9hdZRs5+Jb<1XW^zp9H _p@AmPfHqyibP3r`meHo[W)>%s_J&t-!xv2[LL8&' );
define( 'AUTH_SALT',        'BV/icJk.!orFO1A>$+?|Mf=!By2TKCNM g/pf.K*9O5+8>+{VydYP-NJOpJR&Krf' );
define( 'SECURE_AUTH_SALT', '=!&Qtsg>@B93bjF#~~gs`**7Njp9sI/v4[~4*UqFpf>D@.At;T |eC=%HT&vUBq+' );
define( 'LOGGED_IN_SALT',   'ljVw;AQ%R*<KZf=e`(rW[4jJHKdI<*wf^=UBhz-i=6%FD x~-5;stf;znTxg+qmj' );
define( 'NONCE_SALT',       '}|%@?;;%lM6h^3$4Huaw2%|&m@Oc6k,jHR!bdI#p6GaYbxS-k8Ft6dpG:|(nuZ=2' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
