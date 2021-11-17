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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'o#v}~H?I-i[,FC-EDes<m[;M%< @vk6ZKhrrt;(+K%S0Q52rt@0SOt |F?WF[[89' );
define( 'SECURE_AUTH_KEY',  ' >igJN)(-uY4q4yA>f>`*UQY44M<k,I+^-Zk>x6}OuPW,<|EC|*<>tcm(B.:l5Hm' );
define( 'LOGGED_IN_KEY',    '~1;}1SsmfS`[AC, IgPt)w#KJJ*mdh$c7Z/=.,gc*`uG_7~}(WmsoU3`CK?,1*t&' );
define( 'NONCE_KEY',        'QjYnBHrD4nI:yA.cHg*~I7Q@?2mLWndG tII}^ZXbPW/Bg|}j?CjEhjrd0w*&#D.' );
define( 'AUTH_SALT',        'Uy)c 9.|ai^V1*WGZ~+>wunJwq@GK,J9f_U[Z&1.G1y)`b76D-`4ljaWg, 2.?H9' );
define( 'SECURE_AUTH_SALT', '<Dy-3$ji@cOJ1UHY1Cezc7qj9|UpsgE:drv%G9jbij~_jT9-%Rj5lSg^*l!>7#^X' );
define( 'LOGGED_IN_SALT',   'qwll0Yy|!@Vv};BF%p|[r=z,f$0TYjEV=D``YHLJ+>z*4eQ{:<yQ:< |^DqKjDHX' );
define( 'NONCE_SALT',       '4mBMlFJ{0Z.nKz?hu+D-y|0BPN4t V:9.H^g+2AyB[@b=cPN3`bf!t(/K{=WDr8#' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
