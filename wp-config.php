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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prueba1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'RG^0GakN& t)-bfVUGM5dms9Mw=KB76bLEN$r8P;/0F49xFD;TJvRTKkmbiDHdd4' );
define( 'SECURE_AUTH_KEY',  '#)z$x6[4ZJzJQUe 1BHA=^hpGfRf`aITU+P=Xf0|SD~tVw|J>ljciPNk/toOAB!A' );
define( 'LOGGED_IN_KEY',    'Fwj$jl0o)ftp(o5Z2JfTi]HM>BjN(}s=iPL1;SJ|`[:VCM{(OI&W[#vwcA22KI@q' );
define( 'NONCE_KEY',        'QXD6mW$6D*(e<{GCA@X9$]3L2-;-|mhv|YX$d(8_o9VeaQy=K iyy|9o/72u ]RO' );
define( 'AUTH_SALT',        'gtI>Z~SfO~[VhOo#pIpxixgJeA#{K%k$bSek3d`2XJDO60WVo|>f_gmq!J@dhHt=' );
define( 'SECURE_AUTH_SALT', '*H2^[_fJ$a0YJFq+|1^HEYfJGG[m5yMJlcv]SqY<hza>@j}fjfp4$hWv?VEP@{|0' );
define( 'LOGGED_IN_SALT',   'qH.m*Y<!A-Q8vMWWb|jBUp pGD]:}YBvNae}5i{9HVF&f;aNfAQ2|&.~bIBr^Z!P' );
define( 'NONCE_SALT',       '4_~Vbrc},mYB$j|T@K2/T0b#F=[=]skx>rYEvm4Q+j: 2>@t=/W7jqRv5ec;N6Bh' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
