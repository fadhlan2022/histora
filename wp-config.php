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
define( 'DB_NAME', 'histora' );

/** Database username */
define( 'DB_USER', 'histora' );

/** Database password */
define( 'DB_PASSWORD', 'koimun222' );

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
define( 'AUTH_KEY',         'MY%=cQ`BlnzM0N.E uXAmqO#YJ}=AVhYRXb+Z!>zq>F~U4*8 OV=t~51$/ZDD(EK' );
define( 'SECURE_AUTH_KEY',  'OEe9Xz]/OPr^$@PcuieMr$0=nPQkt{=kgIa?+1NLp>`ThL%OzU7+7aII9aW~c$s[' );
define( 'LOGGED_IN_KEY',    '5<pwnT(`ZG}!z^YupXk+VGAok%XV4ir9}o[Yr(kv<hD6<`P2DUND4Lu(#3pvXp.X' );
define( 'NONCE_KEY',        'id>EGwmrb500CiPY7*yD|xRRAr5l2P3[7N/B;U,jrrnJDzgx]h,&n2XxgOB5^U+=' );
define( 'AUTH_SALT',        'U&/,Y^Y#M.!2jru?5oKD1us10 %9b{aM*QVxa4G[ZK#Tmc*F!CY-qOpxc5bTLCq.' );
define( 'SECURE_AUTH_SALT', '*MGu=XOP[#mTRU|I0yP2+%NM(8:9Ea_2V8w.-r<xstUU)1t;X`X{7AK[W~AGGAVs' );
define( 'LOGGED_IN_SALT',   '3S(1f>AO;#N}$Y!ot*.<)OZv8$+1s2<EC8aTCM)0IjJhZr1%$<,3z#6bYrqBu*?b' );
define( 'NONCE_SALT',       'wf0/MOD6l+I3o4?QS9k j=*m}?/o(i#=_M:4g<x-tj:<]xm[1}k|(W]I)l`5:)zl' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'his_';

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

define('WP_ALLOW_REPAIR' , true);