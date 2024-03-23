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
define( 'DB_NAME', 'practice' );

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
define( 'AUTH_KEY',         'zGtv`bStl)!s0SU<`]0s;D*zCI1dBFB.X(p( <6G[8dJgyu5}.U|Y:Tw9IxjKBAE' );
define( 'SECURE_AUTH_KEY',  'b+i$^c%d1i,u_6S((D3u`(m,:|,z8%t:KwUQM{0O}tR;uy_Wt^=$7I##!3i$*LaE' );
define( 'LOGGED_IN_KEY',    '940G1?<d2OgdL&O*L@]PdoSB:fjE<:QrooHbq=-H[[{&OgFn;v;!-*uq$G5M#!52' );
define( 'NONCE_KEY',        'HKb3(/ok~qE-r|s)tqOgfx#5B]~zzK?&o!,G:yG2Zpcv:]adQsk$uVh-q}4YY4)O' );
define( 'AUTH_SALT',        'MIWfeGM%Ve~{O/?8#e`TRS4jc-`QMX;3#E_nHWLf$P-Qu^zWW_,;7x!bcj^xN*L5' );
define( 'SECURE_AUTH_SALT', 'XOsqt]aK95:j4[ag!MNKNVIAEV2+3k3=wapo}Hu rjd;h>)a;QM2u2VGl~neuC;t' );
define( 'LOGGED_IN_SALT',   's+V-hRc2#8Wt?n[OXTU+o0z[rV1L}Kc`O.7jb$/rDYQ=Y};NNVuVFtzet-v~SL^!' );
define( 'NONCE_SALT',       'b5vqP[R(6)pM^tWi03$Vo&J;UaN]h?0A>caBTi%0kVtWXu+PWx>t#_p|[7GVX)2Z' );

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
