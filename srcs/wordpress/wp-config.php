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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'l!9X #RUnW%(05YzXDWw68]m{^Sh4P3f:-di_vzuG-iSja<l~m~k=VM@rf%qNalw');
define('SECURE_AUTH_KEY',  'xC!|/|IqP-5On+}3*]lib2{ >;`4t){ZSk2CKYvfxeWf+Rw%w6e;TGS-9PX0E;N.');
define('LOGGED_IN_KEY',    'hdF2+--K,_fqH*zT-rI%|F|i|fdsz+6ofNAw/ihj@{zhSW)-{qWH9`J5`A.q&R(+');
define('NONCE_KEY',        '%k7p+(+a=+38UD<!+RVL+c fYRSk>C0yJiEBm>8sPOUFDMS:RTv.iGx-Jf62Q~]x');
define('AUTH_SALT',        'R{K,iy||g|VU.+VpZ;snr-4;4MGmY$x|PQImh]c80 Cp8+lNTP2OfFqR0D-Y+9T3');
define('SECURE_AUTH_SALT', 'oP|*?sQk)fCL {K->PX:]6@+-wR`)I+anD]tGd4_H81!8-@N1?<1hGGmW.smdK*U');
define('LOGGED_IN_SALT',   'Ouz3EKUJ,itRO-u[TL:VK<Y0arb^.h<<t|/4 KyaX+;w3^jvYc*++67|pe4 B1Rt');
define('NONCE_SALT',       '?:S3;2CT0<7`[(?d]|)+ }gM;1EpKK*wR#!]9>qrH^xRC]_nVpc+$}Aj_:*wC:3G');
/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
