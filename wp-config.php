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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '!u(lch.fz0^a{V6;VGJ$eR3#=oW0LC/LMLOtSI;F%U95`Y*U22X&@&Nq++?dC)9$' );
define( 'SECURE_AUTH_KEY',  'm^V2-%D.@+uoB4fi1;fN2^B(NjLs7bn+>{P[Cn tUy3^wHgUm`q%Tt*w( +aRT[`' );
define( 'LOGGED_IN_KEY',    '~O-7{15PVbIei)v$TA,:%dnZzdCkn>=_vNQU::| X+*GXc:_H9Mb%U7>I0utEuhw' );
define( 'NONCE_KEY',        '|%.iVl4tt{nW2p,d1)-2F9.f@;V%N/S@w-bU1Dm5W}9f dI{;{%Y)%=tw$z7fyzF' );
define( 'AUTH_SALT',        '_9|[LZl{?@vTsJ%0`>]9AFBj%{qZ O0<lKc8^r>,9F77z*fj4%Jw^E)TNvaI,1:f' );
define( 'SECURE_AUTH_SALT', 'Z3wE2PLGiC)KtScW.&99pJhI2/-xVkR_9R#=/W$~Q):;~DtN}CU&3@UQH,B>[[f}' );
define( 'LOGGED_IN_SALT',   'e|0Z%)`ik(C+yfqx@PWhA/Nc+y6:koOp9vM8FluvCY.x9IY*y2I*X9Mj%$Q4S*:a' );
define( 'NONCE_SALT',       ',9%khJqd/Mu,Y(L1B~Q:vH%&r9nsNic+a8$Wn)$Jn]+ N~Km5pZ~FiwsF;N]^^*{' );

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
define ('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
