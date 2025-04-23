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
define( 'AUTH_KEY',          'dsI:/gl|s7;|x_3XHo{5R/l$rg;ySY3uSw}_VzQe%FOnlo|1msApYP#n4s;FqzN/' );
define( 'SECURE_AUTH_KEY',   '@VBrdd%<PIw4[8#2?pvw{n=^zqW-ID+C3tsz>Y}+k!dO?RiW.|rPO]bKFR&B/HvA' );
define( 'LOGGED_IN_KEY',     '=E<4Px7JJWBp&Ep/<0|.xR9QN1g78--?^0pV :z#gh_[(a@_[v$hKEjIN9]mU5U%' );
define( 'NONCE_KEY',         'xY@OYIn!a:<L~=N~n:$B48L~!~O47.9i6[yOz$m~) #_eo/)B b2-3N4~}->D/6(' );
define( 'AUTH_SALT',         'A@>67`PF)wo5:{HRMAv8LSyG_cx#qv}x9^X9%L.EL<l:11X_ Yk1Ih-Al?k}A*Wa' );
define( 'SECURE_AUTH_SALT',  'J+O)S*@z-4pJlJx1-c#eB_rF0dy2Q]2j#f2]$LJCtbFZiFp RLcPwg_YrUd!YjU0' );
define( 'LOGGED_IN_SALT',    '>rpN`3N~.C.Z5>C=$7[GX3!Xj~)@YJq#J1VV>Xo756rRv{mv>MeCs_vu?g50y4y<' );
define( 'NONCE_SALT',        '}#3w[<!1f?fYuU[7 wUX *[AkYA0/(%4HoZUZ}8K3#O;@.iO6,o^W($h^]jJV7bS' );
define( 'WP_CACHE_KEY_SALT', '=gnM/~bfLdyHts2m}cP*WNv#EY*])5]IiZGhUl`I@GU2LojoeR!@z$sd{Kb[?ggi' );


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
