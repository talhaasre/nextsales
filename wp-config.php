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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nextsales' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'l?Gtfa8U[K6/i+qE@NXa+m]~&-(=T$NdW,f8kU]UIXK`ydg]uUrMoOJD!7)Xg=]L' );
define( 'SECURE_AUTH_KEY',  'eMS}X0Chttxq~wl-1%.Ovg2&4&J?lSGw(6n^8+R=7$kosOFH]s&g)oK{+VW]|H1+' );
define( 'LOGGED_IN_KEY',    'e=&nnCzNr/E+O6?Y#9n)+|1 mEm7SE&;KdXgnT#0H16RRe@ ]f!l,C{,e%jTePMh' );
define( 'NONCE_KEY',        ';d0yiFiuNDa:l:==dR-q$0YcjyUy}*eea=2_9[5.6fIlbluXd62+a1H28?MyKvs%' );
define( 'AUTH_SALT',        'xst%@5p.O i[R][tFsehJ`us0aJTF~huH--7E%[.hL!9jEzGN[~,[s# k Cw1<#e' );
define( 'SECURE_AUTH_SALT', '.H^/nDUQGtt(g?:$(6mwB.!ky*=qp$N.mCQW8>N9Q&(<(wJ e$C[zl2ppkhi/m%<' );
define( 'LOGGED_IN_SALT',   '-X*;{H%T!@IO3hFSei?HHfKz?K.*lC@%O[!|#Ku@X_1?!Do%ZlkcIy4S&UMWB}~8' );
define( 'NONCE_SALT',       'pCb^Nym.JE#}`gm|bUmw*mbIz`]mQ<U/h&,5)M[pa[:K:-rM|LXVeZkD,[ZR:Cpl' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
