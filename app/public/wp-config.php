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
define('AUTH_KEY',         '/ujz8PddrFS6Qd5Re1JR68MaY8jpmLSlJvYTgXCuTyFG+R0mKOTfmokbRBDo+MuxR61sdKJEUsNAIZ5M4QpN4Q==');
define('SECURE_AUTH_KEY',  'YCs5WsBH3iAM+lMlpc2rl6+tF+N55ZiXbjGLDsB1mNDPTiYtDepvO4DfBOkO88ABhaMEZS2CGArPAymNXUkMsw==');
define('LOGGED_IN_KEY',    'BgVaPZEjYSOQTeGtmlNiVWCKp6edKNNS3g5b8seTFwPsTZbmv0TUurNVZXmu5f9tXbBpz1nXwKQp57c+yzxSJw==');
define('NONCE_KEY',        'OqMEJzrbVjT+6N6W2GU2BT0AKxLQwfXKUxLhISTgiYi84G0O9BRKDAK9c8CBtcV0NQ1HxRtrxl8ZrksTQxnKxw==');
define('AUTH_SALT',        'ACdIE2IWxLDSdCWbohjTUR5Lgxdtsapkrs+7tFJdCmEz4Hf6nUbRrMMaijI+eYvIpbYU9CNg2DfPDIIagCzOsQ==');
define('SECURE_AUTH_SALT', 'haBpfF2ELT17e95J9cNmaHhOl2V7UwH50BH+54zbiKYlwx1TtyEygrQ2nPJDdtI2c/RSWPD4lq85DrSp1C3olA==');
define('LOGGED_IN_SALT',   '95OfoEm/o+4wJDbFVSsMY/my23qcBULyenqDdD7pupMzpgx2pFBl4MYdzvz+j+1iA3ANSKX9NfMqP+wSpNk1iw==');
define('NONCE_SALT',       'cWWIzvTEDywPoSAHnaBf1aB+zDkDIXVsmEOJzjnGL1uzu5I0AzaDjmjFgTl6iBEfdFX/SpajU9Wbgtv6vVQJ9Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', true );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
