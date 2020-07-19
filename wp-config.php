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
define('AUTH_KEY',         'iW/TtFf12++qoHJdi4d4d0TM7a+vHQWBxANWnqQQvD9vgryhDcf77ee/m8OVL2uB3ZiGJYvy4gF8l0H11f3BTw==');
define('SECURE_AUTH_KEY',  'Z/S9BCecFciQweOegzF3yCHcyzpNwzcyIPhTlharb1DZhSO46h3YYXG6IvEbzKw0KsTTZk8l2Jc6/D8BavDVDQ==');
define('LOGGED_IN_KEY',    '72kKtF57k70tJOm2ktz7gwFCqAsk3SEGl9UNIdyCJ4QOK1A8bemguWvGW5BD/6gDs+PjlcjmbxV5X48DYnpJwA==');
define('NONCE_KEY',        'K782gslh5P+Nh3Pl5I2OPD1cYCm08/sNFb4D1/qTIXlpJjWpKD0vS94VuFnLras64ZsFvCGwhNcvXDUuWMnmmg==');
define('AUTH_SALT',        'yxMtOD2+4VuFEJkFFeuGzGw358ebQXVR6Tyiej2KO6eNbuM5mz9K8cNqjvcGAV3lMnlYr8YMk+aE2FT1DW5p0w==');
define('SECURE_AUTH_SALT', 'AHtc+V2PRYG+/+GdbgJLnFH2Cs+iKe31vfWxPNgC5nPPwhKDOZjGTpYXgKUxGECrQVNmvrCi0nyqxyosK2Zmng==');
define('LOGGED_IN_SALT',   'ocb+X8Cc95HAst4IDMukjWIkvvpceQjrb7pFX82wqLmp12obWSnUsMbDpEut0lq2qS9e53/w4ORzYJcrrvCUAw==');
define('NONCE_SALT',       'J5dn97lYgOx5a/mBY+KliDR+OqHq1If6kMc6Aj3LHce0IndG61X1jwGGyxaRed1i1nb1FYZ0oHgJRb9asK+P9Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpt_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
