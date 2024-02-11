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

if (strstr($_SERVER['SERVER_NAME'], 'localhost')){
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );

} else {
	define( 'DB_NAME', 'u133433089_prevoromar' );
	define( 'DB_USER', 'u133433089_preoromar' );
	define( 'DB_PASSWORD', 'GHe3w2q1.' );
	define( 'DB_HOST', 'localhost' );
}




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
define( 'AUTH_KEY',          'Jv_?t2-nUIiF%^G0<[.!Mm!g)nz[X`q6nGsdQ};$/(p.8J~6N+Bj:UXEo{~_5Up>' );
define( 'SECURE_AUTH_KEY',   '2|(!- DIyTj,o/eg&T6EM+*u&EfK[)wK[PaYeP[g9gi,4D4Hi6()zko<*1(`Tn;~' );
define( 'LOGGED_IN_KEY',     ')DpTF!a*,E|*Rqrtlk)1Zy!j$`].j1|QwU.05XLwU#Qoqu]j[DOoNN0MlMyTt@0v' );
define( 'NONCE_KEY',         'R< n&Z%@,bDZNL&jXNxl4gCVn>-~8fm^>l7-i] fmNb%%yn09!|Lfsr5}>F6#,5y' );
define( 'AUTH_SALT',         'TSRl]A/+ZelSFQpZ k1T+ry@z8.+cK01H.{#DjbCNHJ_A;k=m#.^Wv@J@h)Ci F?' );
define( 'SECURE_AUTH_SALT',  '8E 2Haf]}_&NcGf~ux~{BKL_aE%1?eh+3?V3O;mH@ok6Qh#%{q=B)P(10$n[OHbp' );
define( 'LOGGED_IN_SALT',    '6gt~R]T)eSX6g2-5*R~skWQE#kjFw8/< F_h{o`:T4`o1RNm|~jK3f$.&mC}pUJX' );
define( 'NONCE_SALT',        'nosCgvUg1E#[^mJ3N!Y*7sFK5/^~SDMcR{.1b^g./mvnJfr?P|?7tYseE/%#Ac ~' );
define( 'WP_CACHE_KEY_SALT', 'aTZQ^NOZWH.YqsF*p,0)<qLl>CcCR98Kbl4gc>/4<D.:wJo/qW{s;GU!ZiK`QDDt' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
