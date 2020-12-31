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
define( 'DB_NAME', 'woocom' );

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
define( 'AUTH_KEY',         'VG?NuuVgJKbOeR*rzXmfs`t)~JlC3Xg]`@EW#!P]OrBM2unh&wm51yVE7] cQYBu' );
define( 'SECURE_AUTH_KEY',  'O0Q-]%_]6:@;q@(4Znftw7z1RhwNr.I.|9Kh>Iv[hc&<-k0vn:9YIrA$u _A:oNH' );
define( 'LOGGED_IN_KEY',    '6SGttO[E7W_ysyTxwT]cm13b^kj^*4+B`ghJhh=Z4>::]}d6M 4bR%bjdG>^//-<' );
define( 'NONCE_KEY',        '}];1jhg[x8P:+J7@4,Of>d]J/<<B=4ZQQ5RV5%8BnV|9~Q3;/r[>QN3&GWKj|XMw' );
define( 'AUTH_SALT',        '%B!k,@ zzCa)ATpRmd83@3$+eF~4vOn8,DCw+`.g-XDM4{mFKko}K6n26a8]Y2 #' );
define( 'SECURE_AUTH_SALT', 'xa]=XV:6hg9a/[tss?R5,{B^[d3;~P.X(@5)zj(i(v}x!r46F{1>#^R(/NMEU4Q|' );
define( 'LOGGED_IN_SALT',   '8[zg%2p!9SG*#*)jUm=e/jEVCo$#iAFv4zQl%&$CLm Xx::^,XOUqW 2#@^+;mq1' );
define( 'NONCE_SALT',       '%> %?Z:JL}[UvR_a&OO`&0qwqpc#[OP;2t gW1%`&u]k^d]&q?0WXL{jRM9~JYEN' );

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
