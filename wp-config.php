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
define( 'DB_NAME', 'infomat3_wp31' );
/** Database username */
define( 'DB_USER', 'infomat3_wp31' );
/** Database password */
define( 'DB_PASSWORD', '4vp^Le1*D' );
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
define( 'AUTH_KEY',         'LxLzvJsVjVN%8G-H%1MKR%CHU-^SIR$PEq%^tigf%&mQ@q0l,bFh:kA@U]McAj{Z' );
define( 'SECURE_AUTH_KEY',  '&H5]+mMg{Tm}7yVUYvFe5Rn9v](hgx!r7`xb$)bklI_74pMb B4,dVhr@]IO.D0=' );
define( 'LOGGED_IN_KEY',    'c!M%Vty;M)E8G3rp0Xy~XCV_h+G0_H1CE2Qin2NY~;^i`U]*|s.^P:[|7 <>9Bl&' );
define( 'NONCE_KEY',        'lHUATkBAw(gMEt^ ]a4 >a[JJkckV1[D.*M7qW^V;@=XHUp9F:L/zB?k&h458Tf%' );
define( 'AUTH_SALT',        'qgTN+U|_9NgR=c5]nv=8YL:cfS5k>|L>X3nFB,_Mb`PjEUbo#mRFfmM?BFVUtY#[' );
define( 'SECURE_AUTH_SALT', 'WfeH[#gFLB,?C4_f~9H-5*7Xg]E.=6YU;<Q||sFV+<C|J,,MHA +l*Qm1(iHiX)Z' );
define( 'LOGGED_IN_SALT',   'B{*h`a{vT[]a]Z<7 PZ{m/~s?/]Uk&l|tIH4TX:pJw~-[%4&ot)jJ=qelC.3Enw[' );
define( 'NONCE_SALT',       'Ti9fs@XeD4c7nLVs?I|*{S}$PWB3WiDB>|VN*&e$)C+(V~,^{Ky,J>TY>a(PBxR_' );
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
