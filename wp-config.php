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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'diferpan_site_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'LF-nuJF:89i#zZlYCO(.2VKY@&rKGc-^]{ve|O&ivxfjP=aI!x|+]t$HQh60iZ-Q' );
define( 'SECURE_AUTH_KEY',  'q:_qVF,D5DHn@e]{SS,^uoxlJtbTbgu.bCd2+IGr.MQV|gJd|A1ed#w9zT7eRIH6' );
define( 'LOGGED_IN_KEY',    '`fD&PY*QI_b6>^k&xn?[<:<hdU3HHetK20Fd0Z./}+WsUF.>vWL)`srJ_e0X7BP2' );
define( 'NONCE_KEY',        'GQ+x.fR,0s@nny>v_&%QJJ7fVZex}Q9%&9`!KzGzL0VR2P<p<RO?mI5>Bas?:l[E' );
define( 'AUTH_SALT',        'FuJE:L&Hr:e6:(dyd7|?WB{y(/7^c,^oaW97q-0]Y_rmEDJ!<Ya.rt69UJuJUXZ_' );
define( 'SECURE_AUTH_SALT', '0R! 6c5EKE`nQJptN`Ttwn%XOUuG7T_%hPRjm;4c<6pCQ{Y3)a;=s (b%c^.SEQ<' );
define( 'LOGGED_IN_SALT',   '>%sD]+&^/f70~c5#)-0Q$qoMPf;,.Z|CPIcsq__8S#a3Ks]`J-`@Zqw6TyW|lCGy' );
define( 'NONCE_SALT',       '6>9<82v9Rb(v9S#*]muR~?HV.WKt72;EFH8)`_z~>N;({4EFd:%1}Q5,#syqK%SB' );

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
