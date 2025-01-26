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
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'y=O*rFc~3HP~&<9( ?f]cP9<3=h)~Je0Lc)o{L,Y1ATg(rR%yWUw_4K.%kq!:7D&' );
define( 'SECURE_AUTH_KEY',   ';>kdD.Tr-Rq2=HB,/_J3(8k_6s<[*%7UyA+tbFhpy:bqXB_GA4k`C9?&f&O q}R4' );
define( 'LOGGED_IN_KEY',     'Trz3PMwi06wZRF$(_Q*Y~+@mE.#Q#_O<(*JGA1E%X?1tE(Tugpl@NT]+WY ]HW_~' );
define( 'NONCE_KEY',         'S~*w@j*zoxf0!S.Y-F( 27.Gs`X94!k3LN[:HaI1FMyZ&&o[iB2<Lrw~G)]4^>wN' );
define( 'AUTH_SALT',         'r5)__pa7Xva?`>[=Lg`]qv>/jb#>?|+CCD+8|Q~=PVybLLgdi^xVM4;M9p/omH_~' );
define( 'SECURE_AUTH_SALT',  'UpTU~`=Stq+]qPUfN=cIpLIAaK&ko>j38jGDI=Z%UazPgL8Kb?aT:AR8HztSqsqW' );
define( 'LOGGED_IN_SALT',    'jT2?M):X$o,yh%Wg)Hq~1h{ wj^jsu4O3?p:ShpYQ}d2VWmdr.Q*56`y[:(ac8DY' );
define( 'NONCE_SALT',        'T>6%zHF i;H5G(u{+$>[Tx-w?X7I g *+>2bi8@%y] VHdiW_dz*|%}OTSrxY@Qx' );
define( 'WP_CACHE_KEY_SALT', '$`D$84]pu5Jau>LFf4 #w4.V,)Dg1yrpB1% vytV~&4ZKYI=oI>bqYdo$CSQ*:By' );


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
