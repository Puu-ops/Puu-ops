<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'puu' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         '193vm75hyxGmkvoBuOBhIQKZWWSV0GAoRK3ZEel1NGiIraCLedXOehi6ncNz8SLX' );
define( 'SECURE_AUTH_KEY',  'F9iVpGLmiG7NVVRPR6ik02df1CkJhDNxPJgqNuCkti4nsgrQ2EWVSmmS8xMFzqpm' );
define( 'LOGGED_IN_KEY',    'xn2zu6obHqGkgRusYba9VlY7TSg55wjxuAoX3g5E6YNL4enVmRI0JncOI5h1RSo4' );
define( 'NONCE_KEY',        '3FEoNJTttiyImajAFoovVbFGLvQsqYPRbB5ixLcvGnhiE3MysRIHD3LumplRVFKd' );
define( 'AUTH_SALT',        'FhDtGXLCsM1uxl5daePlwwIGjGx0Af15xzAHC27QgcR8UTGGigj9c07A1uTSIlDT' );
define( 'SECURE_AUTH_SALT', 'Bb4hzF5RZPneqI06b0OTABDfxe3EhxRx1o8gFGWpTADDlomZvaokSTje6SDNofoQ' );
define( 'LOGGED_IN_SALT',   'LTQzeThzStv8HDTjlUE3GMGNVJ1c0fo5nC6rtU8Nwu5aGfa0i11QWalmTiIfRdRc' );
define( 'NONCE_SALT',       '6LmcTmHl3pA1PDMGLHh2vlGD0URDiYgeOg5cfPgNbb6y8VmUL7RJygPfVSTELOgH' );

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
