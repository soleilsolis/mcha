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
define( 'DB_NAME', 'db7hjcyqirng4c' );

/** Database username */
define( 'DB_USER', 'unxehwbzvnjz0' );

/** Database password */
define( 'DB_PASSWORD', '9jgna2brzcys' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'J*{^{e<EhQo,o9O*!+C0/[T8m$fvxWCeY`o,O5Ph?:1B;1_p(3P<+ tDMIpt`p/L' );
define( 'SECURE_AUTH_KEY',   'KzOg0W_D3jvF^>@_jm2sW[^tPDr!`x*_1s[>)qkgjv}8Q<6~Xg7@j/N,|E$Wi*u ' );
define( 'LOGGED_IN_KEY',     'm#`QTB6)m1itnb7X:jwk4Teg,6iD)cCH* q;1?e]/Z,nTxRsj#a)rWn,%RRsM?1B' );
define( 'NONCE_KEY',         '9_rx$%9]VXE%uvCxqRX/;?/mIGpzin9n8HH;5cW9msH.!Qyf5r0CzxfzRu(4bV/8' );
define( 'AUTH_SALT',         't0oF1Jh9?dtp5TA@*WW1}htGtr0:fL+?OuHNdN.]+6JQ.{(|Tu6npDW=JhpShLdf' );
define( 'SECURE_AUTH_SALT',  'xDKL`4KscrH0[JVfBeaZ(SpK1L<SkZFnP/ESXO52mSbf7`(;Ze>X:jc9pS>V:<*o' );
define( 'LOGGED_IN_SALT',    'b&8cEtL&M-{uubW&chC[KG!41%gt;iGtJ_)[tX{ABt+A$K}yh(PjV.g*eE*46;aF' );
define( 'NONCE_SALT',        'pB}3ERDV:yw*U@+3*3|R7qQZsgd@{P}/^|^L<0Pw6$:n OK$f040Qq]tXT=8WtJF' );
define( 'WP_CACHE_KEY_SALT', ' 2Ya=xUgEg$A#=)_J_p=;8MgsJkN3pJVVfiATF0Mjz/}g#D6b],+1*X0Y1IhpH.N' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nis_';

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
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
