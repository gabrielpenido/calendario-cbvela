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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'qNLsZaNzrll3cCP1BEhYNCqglzS94BPGKGU4Pq9y7TGg/wdGiy9N2U29lKVUfrcQJlslZBkvbuRPy54OmUHsOA==');
define('SECURE_AUTH_KEY',  'PQdFt/BDW8jIYRRxgdmmRDPhs8zu1Y1ZLq8apxqOWXTDy0zPpyBbmE6tgJBDzLSnpuc13uNsI1zcV8K+x5w03g==');
define('LOGGED_IN_KEY',    '01oK7iC5e1ybXSxXT7ea/FDDLStTm/kIZL/4JU/IqknCqNwlxP52okRDNCylA19wd82rJCo+UdGnVRvKaU26fA==');
define('NONCE_KEY',        '2TF8SqQIsib/ZdCzPIqIBxPnZg3HXD5Tn6DuU/jzFmqhcPZ/zW4Vf+6S3LZ8eqit1nWVWi2qRd7kwjCzKARGgA==');
define('AUTH_SALT',        'AJPVYTapCLxmyUZHphXjPlhaXPI69iF+D/t4y/mIpLx+YKg3PZNnP0h9vAUn3T6CAaZih8xHJyr05riCvPFj0w==');
define('SECURE_AUTH_SALT', 'DaQO23AVRXS4slyloGZ0fFcOeEei5MFV6ml7o7tjLpfWIsrpkAghrOPymLsn2VELddvXB39oiAaL7J0/sEu9qg==');
define('LOGGED_IN_SALT',   'ISP47GPNzNx94YX0EfSlHKopeBmyccnBE06149ND+l0ESD0itb4T8i5DnscOqJe4wsfFpi0DLFxrwU7swSG4/g==');
define('NONCE_SALT',       'iQ0nebsNcLbhyKQtsFjAw4bq1oszcVEMBxu7qnhS4UOwfCILwm24iOYvKGTZ82t4xhDnwfU1UpsAjdU8BOWcFA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
