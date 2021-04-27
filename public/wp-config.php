<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define('AUTH_KEY',         'fWJgzQ9oOPTsAXLmqQDLRugJh99XnTea5wjmdqJM+1flhgYGtmCFj+n6MgUqgXgN/bfPViHBmR4hoRfQ6m/KSA==');
define('SECURE_AUTH_KEY',  'X5WjnCyP0OYxggOrxNGhGzRC/0q2fpLezW7eeRmH/YbkzbcgpuG0A1ggSLlgZI9hhdWA7eimsNG2ibnR7JIm+w==');
define('LOGGED_IN_KEY',    'MYmD0ozRRloGFGXoOZHFUeBPDGF6jenvMmjrUnmmwwBHn/dwsLy4+SAvJeA0MAJEjA2OQ1UZHbL/Wptq8jmt6g==');
define('NONCE_KEY',        'w7Id48+0CxYvZ4LC+6gSqto6Vxh1+BtdLXXhCxXdD8r5JhrH0mR9djmHRtTxuqzR7Wb82YCZMDuja5rr2QiYTA==');
define('AUTH_SALT',        'FHB9PJY1Vl399urVW+uhAh+ga4GIYfWS5EkcDekYl4pNReiQgCFE6jvQejXtXHmbiwxy/4W1FWS+nzIJcrKMug==');
define('SECURE_AUTH_SALT', 'avCunb0akD94Bj3jTHtrciQsjqiS1AEXGX250IPP+ft6XJc1vzswRP7ojswjyZxO8Yqr4mYLZYw39mB5U25Uaw==');
define('LOGGED_IN_SALT',   'NWY0fAnIRJH7mgLcJ0+GBEtvJq9bxF8uJFwgREfbWF7QFoBNl8BoAeGT3ZAuMiYQixN00s8KKVr+j+48wio1lg==');
define('NONCE_SALT',       'e1rGT1SxsF0qxHm7JUL+Trt5eC6c1tH/jBemME+YRuZGp0YfKoU+t2FFrOT8lBeTZ12qZ0NTlEjKAquEh6nvPA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
