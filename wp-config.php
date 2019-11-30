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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'q_ZYdez];e-@,XgZX0ngoq+etO[+6&25nQ~DLwMiU0Ogq`OctUEcaaMkT)>^BUq:' );
define( 'SECURE_AUTH_KEY',  '_:^kOXbKMcO-=3}.Q,Zm# Ifths7SaE!dKp@y4C3~cu<W-R(!N30& Fh5DG`32j0' );
define( 'LOGGED_IN_KEY',    'IRiXp}IOgjq~f3hh~<{d[T1HJemV53_0:`XUPJ&k-OKhPSHkzkk_;L@(1B(]X|i{' );
define( 'NONCE_KEY',        '~ZFqDl}hnM.FsrS-S*,e/ngcxPAGjii%JW[rwKH67|8%N;IrIZDliC]!V;X#rjW>' );
define( 'AUTH_SALT',        '?S~Gr2Rw~DqfN%JUafx< %@{5`O!K4)]e[(tM[#!Zh$^&YP2i9MG%kT50-XS&k8y' );
define( 'SECURE_AUTH_SALT', '>-z5pVX5#e<M=U@MSTj~MOg}H6=Pvhb#5gxMf:(Wv|%t{9tM5bN4f9hfI#^J2=oa' );
define( 'LOGGED_IN_SALT',   ' qY]0Os@Ej9q8yQH^,chD-<`hwsg;f{vi(*pSQ[XAA os<(FzbB$iJ,QD)ICWLBC' );
define( 'NONCE_SALT',       '@PDqHGg#yhkm9IZrd55P$6#Qm~rK9[`f<$EkIgzo}zH|Wgv2RPdg>7BR9+,$E]f%' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
