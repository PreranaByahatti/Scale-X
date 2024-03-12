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
define( 'DB_NAME', 'scale-x' );

/** Database username */
define( 'DB_USER', 'Prerana' );

/** Database password */
define( 'DB_PASSWORD', 'Prerana05$' );

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
define( 'AUTH_KEY',         '>#6Cah84EBvo2OzhL<li;`rDJ78]QW$YWBclcu!fKB 9h1f;,Y&J;d^SJuF!.B8f' );
define( 'SECURE_AUTH_KEY',  '=Tvw9YjXY5-rUG2|t3`k/Xk*Pp6~3kBHH;Ma 8w$65F|j9)Fwrb:BiL@d[4b:P*>' );
define( 'LOGGED_IN_KEY',    '8=OJE%`hsYQKhzQ${Hb_ta>O*&8xv]^c&*PS8jrG6esT;kCqYRiI| ;,/^nbsiE*' );
define( 'NONCE_KEY',        '*AUm*:X4fH5>Y%:8/&3({!Yz.ug!k51UnT{B)HdUbO)V6a?oJ+_O%Gq@n%Ah:2Tf' );
define( 'AUTH_SALT',        '0b=`NXr|&RaIZd-!P)+qiP/2.3,|o81QF`a uAH7]VSX.E#N8mf<~y~d][z9 _Va' );
define( 'SECURE_AUTH_SALT', '{K$IzQDlY2pMz={c~N{gsC~z|Z;KrS/>{}PfuU-HiH{$~AE.XCeXRVb:$H@~rej(' );
define( 'LOGGED_IN_SALT',   '~x>pfCgyutIR0t,`c#O&,|Ud9`MH-VWC`t0botM:BKh=tLOH-MdxIXJp~zrZ7n,w' );
define( 'NONCE_SALT',       ']z,s<WAUOtagb,Q,ls&N~E%-,vo$IBc*09_{%6=s &MO_xr-tXfVo{l|wBg566<N' );

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
