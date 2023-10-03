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
define( 'DB_NAME', 'pos' );

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
define('JWT_AUTH_SECRET_KEY', 'your-top-secret-key');
define('JWT_AUTH_CORS_ENABLE', true);
define( 'AUTH_KEY',         'eJ|Rk@*)n-CsOslV$`r]K=fh3:c:j{5b~w:Ur-NBXpFrl]V=RcJFB: Did|>:Uo3' );
define( 'SECURE_AUTH_KEY',  'T)!x {a5S:u`3I:1iGj)|b/5tB*3[?N)Kfy$kq4MIDbR/FHH/^ id}tK>Op>PkO}' );
define( 'LOGGED_IN_KEY',    'GRmten(Zzg|dQN%+Wv!ZlI37 RZ2t_0t._c,Bx9F0hJ(8;hSe!(Bg0}-/r+:LX48' );
define( 'NONCE_KEY',        'v$Vm<||wm0Jk~r9Ga{0PN/fR_uCcmW92tQ+!a>};Q;fm^i-zm6vCaTY)jmm1-yQN' );
define( 'AUTH_SALT',        'eUhyAx:9JDz+Bje`rxiPAC8_vQKq!ZZ+[:|]LT+fhml}sXCnMd-Je-W?Wr(T2Ob(' );
define( 'SECURE_AUTH_SALT', 'un W2}.q]0vuTNgsr-cK,0nt#Uazlt,ZN%(N2i*$Q$7tM!>_uEAeq5xv@]T}3kB9' );
define( 'LOGGED_IN_SALT',   'mn[5co(,=5NBboLtBb1OBSXFZL7^ez4_d&R-y{(wRsE qV9ddTVW~f!>;1v;Nhd1' );
define( 'NONCE_SALT',       'xQh+r?PIb(ZI).NDK+Jc`QB5U8]9  4OnV8znP&E2}qp>CDsDE(_(c!x+7V)R9la' );

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
