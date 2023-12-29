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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         ':NABJ_EG<% hf*fR;h[OX1t6}mU!7O1zcIvX5h<4EIh2Q7Dsps=Z@6fsCHu5X&_N' );
define( 'SECURE_AUTH_KEY',  'TTbooWntH(/h%X>ai63^3F)~{y^-~-+VRCev[z)EMC^imB}ZRKxS>%S%v`z)oQDE' );
define( 'LOGGED_IN_KEY',    'NTt=ZESuYG>#ZTQ}1u`7zMVdDNBhsY7>7`e2jM[W+tfo@,r2sTynEO^QXEUPZ-{6' );
define( 'NONCE_KEY',        '[96!;:IoUdWnAGg4xI^QLLdA[9w|>Tlk`,BKk_;w6G.Mp4Jw9D]-*ejk*GdUrH<P' );
define( 'AUTH_SALT',        '&Bv2M)})c9s5QF>o&La5k,L>-LS;JfB.gpD5yvMfWc=QY Y%HGkdDyE6?i}(HmHh' );
define( 'SECURE_AUTH_SALT', 'i{(SX{g[rL1;.ZQNm^R3u*y~Sz<{+dB2[>{v>n}>NChk&lzWSV7.tk>&FM,;$i+t' );
define( 'LOGGED_IN_SALT',   'bC/mH+9NVt,F@jK2h&8qycYkrsnoBG<C/AO1Zw[JS,]|.p=w#9*T`DJ|jGefxDIx' );
define( 'NONCE_SALT',       'cpZNlwkh_:k9jVI^&.qddU?5x*b]qHpjM@mvhi)Ka$u,r,PJ}c8fKss)zQ<O4@E7' );

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
