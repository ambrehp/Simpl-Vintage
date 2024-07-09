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
define( 'AUTH_KEY',          '=:hvk{]Iv:cn?^@O-ZsYZ4]?ADO|:KriZ@486@;<>#>;xf?Rs?nN74W1tbU$Dp^J' );
define( 'SECURE_AUTH_KEY',   'Mbf*Kt)HrDUmHEsd+-ZDH0+r]f(a~ZmWP^:pC8E}gw:t~aM9 #&%a&]n o+Od9!I' );
define( 'LOGGED_IN_KEY',     'Qd@*O$0CMNZjNcrJl`rrKS#7h2n?jK)N0gX&NjlSXYc;*UaZw*9SyJ)BM<wYb6GC' );
define( 'NONCE_KEY',         'd4<6OMG)8e=(~tn_?_QO&RgRKo3+Oc|R+35[ %+P!E!iZb@_+dtR@<KjqDL 4+4-' );
define( 'AUTH_SALT',         't)AFM3KP92Az?}l5}k%jM}jr_y>Qf0fHbScb}S#ws6;6.1wRv,m&[>&>1&rj)uf>' );
define( 'SECURE_AUTH_SALT',  ':#JY![q-MhDw~NxZxA~o$%q!dH(8iL_k6lLcL*XR5J!%J#y]=0ZOWI8 AC<lNPAS' );
define( 'LOGGED_IN_SALT',    'c}e5wzbz:LNuibVw^[cPRQt+odlTx(WIFg!^8>2H1Av~P!L2P0glFy!VDqfN{o*Q' );
define( 'NONCE_SALT',        'D5AuFs<TzN/(N:a.Q.W^sZZ<Qi)p0DxGT`O8KK&|&>LICp_)wd+V#O$iwNZ2_[;@' );
define( 'WP_CACHE_KEY_SALT', 'qTlQbVp?>5mm-:)*OyXpV:IgF4_iZ&TcGAq_b8{i8.86OI5hx+E.DWJ0&O6}=g+}' );


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
