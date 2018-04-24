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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

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

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5gJnXJD6ge360z1FTF7WFFQYMyYbHYMR8W8zwbtYLsGzZmsAUZsdjzzEt9TnZMO1RWAnj1N70lnkVGQmKcEIXw==');
define('SECURE_AUTH_KEY',  'wYC6Z/Q7Su7JfvqqjBuSah3uDPr2N5I6+7dFLebj434GIXmUdoPEnVMx75t+Q326vWpovrAvdudgeb6+Pc8EiA==');
define('LOGGED_IN_KEY',    'qY/1GTQtVfEkv4KC/N6FxMBu8Qpzaor/8aRPxiH4riVZTyHKBzL2dwo+0dxvvJJHkPJC5QZc6OQWci64nbRDyg==');
define('NONCE_KEY',        '7xAahc34az1XSMrnH+7THws2rvd4OrtJbWOZFYzg8RKTIYqn45dULkL5Rj5LUZrjZRPKEev5nDga4nGC1xhw+w==');
define('AUTH_SALT',        'n4rGrnzHRh7SbXzvGs3kspvWNqSRYY6RTaelIo1Usi3gEeFdc7YP+sam7TNS/AERQGbo/Tv+ijTalPgST4W94A==');
define('SECURE_AUTH_SALT', 'iXuXiMyFrsIMCeBowSrKRteSyXUzLImX/PiPcvYOIAeESODOhbdloDNY11+73tq+8ZZ6W6vVQJULdheMtcdQug==');
define('LOGGED_IN_SALT',   '0LenXSUYpC9/+i8xc+S28gXLI7n3bHv0g9JM/wOscDhjgjeaPwxYD8yy5C224+qJOTCuURrucK4Mr8sLA/nCBA==');
define('NONCE_SALT',       '6ZjJp8yqN7Lr8gs5KskRbjQAk4RIUadLs3PGGPcsIc+0GfzlgUcST2Y0p9UV83LIeFDw/iR9hz/fYHY35Fiq5g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
