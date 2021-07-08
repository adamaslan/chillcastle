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
define('DB_NAME', 'adamasla_WPEAJ');

/** MySQL database username */
define('DB_USER', 'adamasla_WPEAJ');

/** MySQL database password */
define('DB_PASSWORD', ')Fx2LG=WE$21YGdU5');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', 'b4855e66b26ce94f8296f3d701ce58ef40643221575ac0d5d9c60978659b5ae7');
define('SECURE_AUTH_KEY', '781efd66aea407f9235c98df00a473830bbb81ef90d76277b85f46927b39a948');
define('LOGGED_IN_KEY', '89b65fdc23bd8ecc2871cbc5eed4956ecd499ec82e96281563c30cf42c5c3972');
define('NONCE_KEY', 'fa76b460c70e220bca842e58ae9e54a26928f563abfade29970c9dae282c88e4');
define('AUTH_SALT', '702eb2aa3bbfa9379c4d94503d9b015792c701b79f769a1befb5530456bfb74c');
define('SECURE_AUTH_SALT', 'c321862513ca7698bc16fe9dce4b1180821b340a70f1ca091ea082be76b3802e');
define('LOGGED_IN_SALT', '669532981980b56b0f0b7607914a1cc08ce2ace25e0b90876c7f91abd1171910');
define('NONCE_SALT', '25730e4cb8b55b02ba859acd33b57ea29b9af157889f838ed0a76693bf26d9c8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'qHh_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

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
