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
define( 'AUTH_KEY',          ';9p)u^ Cbn}ki{{GOd[g2gm4ZF1ysxj;2l>|H)Z&$nQm;`pe9e7(5!7u#5xlb=ML' );
define( 'SECURE_AUTH_KEY',   '.Mfu,rVx{E<-lsLV>s=x!5stTtdM?78oTOC7V@F,TW!XbyQtn/bzNj1`x/Nia!)u' );
define( 'LOGGED_IN_KEY',     '/pt6D.#xgHz3jWeVsq4sRC[J3,:`h6#U-{Qd`ZW/uD~>9c-M2KoBBpJCBS@|KhZv' );
define( 'NONCE_KEY',         ':ehb!=g4d{L5|9s/>luT`:1HM:?VB|T3U%/1Qjdolfl< xq4RtV}U1YP3o(mZyN!' );
define( 'AUTH_SALT',         'l/=H^&!+)<lb/M|Px}sLXp=o0Yk}{6nC>,((;pv&g/40Gio$E=[&omP_kk440dLi' );
define( 'SECURE_AUTH_SALT',  '&)!~xS#XE((V:mUs_{`I*_(wO^r/>a.S/H6-}.(pyDKE080|lIyXE~!5_F<;u4+:' );
define( 'LOGGED_IN_SALT',    '&LetphK|aTG}/TG4XLo^8r80E1<K%ZY2wKMu<2X*@Qs[&q3Wcp-.uNr60*xNL2Q[' );
define( 'NONCE_SALT',        ':/?Lmg8!~Y.^toD@djy{rD,cipGIMEpZ)4:TVy5&M&PR8OfpTdwzV6jdBm|sr4{7' );
define( 'WP_CACHE_KEY_SALT', 'o0E6TH;w-j&?,9oM9OFm9n0&Eg?f-D(8FX7AM1`&_KD?!)N_-fR H0t%-Iu<@g7H' );


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
