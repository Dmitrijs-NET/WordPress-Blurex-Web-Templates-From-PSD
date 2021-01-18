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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'E:\LARAGON\laragon\Projects\bluerex\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'bluerex' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'VtBZtEVO2JYS61nKRcFU7qmnsMKV7J4O6VPiJPQYhEPOpfJH93yqFbBOSk5cB59p' );
define( 'SECURE_AUTH_KEY',  'xEG24SMBDAAzH1HugLc34AvFyLvhSHqWJGhjDCX8vAdjV95n53w1ILwg7EBIs7zh' );
define( 'LOGGED_IN_KEY',    'DIXRQ7jPlhv9ch3D2qjTwTEoOrZMWdsJmbgxPrOcGrL6n2w14BsvhaJH9DANCQqu' );
define( 'NONCE_KEY',        '6UZs2r8mDcLgbXXDJxwOAOhxVB5FZXOvx2urnBLCSe29ojBYnvxeSzw2SmozlxxB' );
define( 'AUTH_SALT',        'ALIdZ6Ck2qNzH6lSkuPtXt5ol4HHW8wJyQ8nHD8g6Kklf9qay8UUhHH48YrVrGqY' );
define( 'SECURE_AUTH_SALT', '4l29kMfO611m7ZYtU3iASd8MXIwGXyVrlI4jiNsFnkNf2Fq5N4njX5d5XYHMPeiP' );
define( 'LOGGED_IN_SALT',   'hhAvti9BHk5nl0J5SkkKBZskej83lmYlQHn8Iqf7E46At6p2ybFVlxdfPvZjI15E' );
define( 'NONCE_SALT',       'vMfOiO15X2ij184NLlrcHzT04HL4kSd0EtDwYBgkxTbBaxOxoVkFesOMhjglD8mG' );

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
