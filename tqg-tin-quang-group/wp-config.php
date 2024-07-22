<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'tin-quang-group' );

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
define( 'AUTH_KEY',         '.f!TdKl20SP#8yd`7^vQRyhYXoSH.lpt(R6J7e<;buls9O84AVZ|Zy^yrV}q{2y8' );
define( 'SECURE_AUTH_KEY',  '_G6h,BTB=O@I//:PY!KM$x}CP*.&Z/.,lRGqCe:tcMt!5CoQ{=[eoLjArc`JgQx#' );
define( 'LOGGED_IN_KEY',    'lzX:xqC.v$JG&ppB2ep,Pl-im,~i!v9#Y[;UDU4efYNRa32dt6 NxXtIKH!F!1fb' );
define( 'NONCE_KEY',        '8(O_6,`^+**{nK-5KR3K_VrT@*g Go~/o24xX-~P1Uf(t^ql)#sNz9Wl2R(f,MGj' );
define( 'AUTH_SALT',        'p|>mg*)H$OB:v`l[>TN.E^Q`1};{sUyQ`tVvz0n_OBF,#!.vKvOB$2xTrCB~}Qzg' );
define( 'SECURE_AUTH_SALT', 'eWw!;KKFAITELiD&ZGLW`1gW-)?TnMnNF-JWHX0|57K{=1<ZqPCB3~yWk-hgm;%R' );
define( 'LOGGED_IN_SALT',   'K/5U0N&^x6EP( z0!>;uI]1]tAkm*~zdv5##7eG!GgNI!ZWC,*l1ggjWlxS0^ ZV' );
define( 'NONCE_SALT',       ',MWGdY>yyuIC=U(2R0!x8<WVy[f7}A{-^n}=.QY+C+].i;mv95S<;K{!oA@g2q?{' );

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
