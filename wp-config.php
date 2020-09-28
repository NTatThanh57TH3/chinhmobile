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
define( 'DB_NAME', 'chinhmobile' );

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
define( 'AUTH_KEY',         '?L`8+rvXbW>z~%b}2J~ac46uaJ5.{iD:mVuy,<M,NOsWg3<EWd2e3cn$YBx(0]+m' );
define( 'SECURE_AUTH_KEY',  'd_FupN_eOt2K`7Hr[&-%6|gvw0cP(:Zt?&h,i08P<xgc/Nr~J(ag2+;ECJHkoXoy' );
define( 'LOGGED_IN_KEY',    'f 7[G#K2C@f8`Q`2[l4N72X3PS% *nn4z3VsC%c{+fdF!!7fT6JhYf~cr)]WOw2z' );
define( 'NONCE_KEY',        'k`5^Kai7:J3N+[U4yx[1gyTv|(13t*.H{w`s1bA]pHS{9$U4zDZuE7p.ndXoH8ZQ' );
define( 'AUTH_SALT',        'jvi6JNQ~$=3[ `Duy{!UQfT{l2N6ZjbqUfmI7p!LdL8!$v.;n95M{b,Z:O>ZY+).' );
define( 'SECURE_AUTH_SALT', 'D_ynlR2]lcUQAgjq/b]G{?z<DUYOn$1$$I9.vK<jH$cx4G.ujrVDH6OX^(m;(#*R' );
define( 'LOGGED_IN_SALT',   '@DP<i2vUsiIhz1(5^j7P)k6?u=N}0:bfB=cph_2TAUt)>dt@/_4zIzu=<<y:mih/' );
define( 'NONCE_SALT',       'Do%gEl[uNNkQ/S2e.tq[o|W+X}|sQm`%~Dh.s7p2/q]#LC)vNjX*Z*h&l_IdOW8A' );

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
