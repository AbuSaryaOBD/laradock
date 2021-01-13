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
define( 'DB_NAME', 'oceancod_wp37' );

/** MySQL database username */
define( 'DB_USER', 'oceancod_wp37' );

/** MySQL database password */
define( 'DB_PASSWORD', '2)4K5pPS9[' );

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
define( 'AUTH_KEY',         'hggiqxlxoscd30o8lyfjnmnfwvpudnblnxe0my4zfgbeywx8xnm0hjwwseef1kks' );
define( 'SECURE_AUTH_KEY',  '2qgab4h7fxdd2riy6516vfv0hgbexopuzovbjcux4phwvw513dptgtvgqs7bemhk' );
define( 'LOGGED_IN_KEY',    'yuk2d1p1yi8itye5hpi2jcwq8oe0msmis1lnowtzwiavlluuf96o5q4sz9uevvio' );
define( 'NONCE_KEY',        'egk227abymz9hyh5p3ycsnd42rjv3zwid3ssk3v9aosljriguptbzbfze4v6tdvv' );
define( 'AUTH_SALT',        'qqibrjwrh9gvppqhe2iemfb5zkgaful77uic0meikpz4w8xapzip0bznp1bat4oj' );
define( 'SECURE_AUTH_SALT', 'khhwdv0njeza9f7t3puyeoj0f3t29rsfdzgg5hfxchbuo4kre0puzhuw3co1cmkx' );
define( 'LOGGED_IN_SALT',   'u3rarc2zzh6pokrfd2ojvvgj5ilt9jpn6d5cwbmwujkwrargcsgjtaxaoyrrmlzf' );
define( 'NONCE_SALT',       'deuj1htkwekbnkwxpabteaqv6ep4tkkrokt9lohz0agms2mluuwry2nlflypk2pr' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpnb_';

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
