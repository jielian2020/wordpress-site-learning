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
define( 'DB_NAME', 'wordpress-site-learning_db' );

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
define( 'AUTH_KEY',         'tRv+6wna%~5$<vfEi<)40u??uT]{_@5qla<sxCxY[ Ki*[lcyuxd_;?<7_,1},cg' );
define( 'SECURE_AUTH_KEY',  '$R,AyP}PIUQ~P[jtidXMBB%!794PzY~q`*c#{qT,2-y/WDt<hHZ2?jmdZPt(^)gH' );
define( 'LOGGED_IN_KEY',    'Ht#S<i2pYUNcm6v.R^)GPtPS87_oKcP5v>tpZJ)*@Va+ zI_Jzen9=X>;_q-gB*%' );
define( 'NONCE_KEY',        'WA9O.BwNR{;GM<IF/TpBs!aa$#ee?nGXva]G&L?rzOeqr[oE81EC%PZ_*=3V~)oa' );
define( 'AUTH_SALT',        'uIYRi:/q/=RKT$|]I:jqBpdTzaJ}!kM(Lm8{e>otCB<X&%tvM*UTII.]DP5LQdd#' );
define( 'SECURE_AUTH_SALT', 'D@Uw*@Ax&HkDi_VCp8L0#$~6KDQ9TP!5MI7qoT[}7*J~Nn>M=u.nkA&w9M9_OsON' );
define( 'LOGGED_IN_SALT',   '+2*dUSM];a5:m-Kh _+6Z91H?YDJ!3#PZ`A6}QdEoDpgufkI::s5S,k[.6?`q0rA' );
define( 'NONCE_SALT',       'J>TLWR={B90j!acM@<8;${v*4Sp^<wM)0#2|Cw`%7cXrTzS.:=?vy.  X>DeHo*G' );

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
