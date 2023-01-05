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
define( 'AUTH_KEY',         ':0AaH4T[q%MIIlOsRBH?I9ZUn^DY,`im<?.T)9}!gi_45nS(](NiIop36{OHqvFo' );
define( 'SECURE_AUTH_KEY',  '6:|e;Wf=N]dVD3>}ja9l]Lg%zXu@:^!a/U)u);eh`DE|j_HL/QSR{Lu3==1(j7HQ' );
define( 'LOGGED_IN_KEY',    ']?FQd?=77E/k:0md,|i{h0cPo>ag_#^JW?A.A{HtcM)W36w$owI+Yo%?i-W[i&Bq' );
define( 'NONCE_KEY',        's>0FsJF_6 b7..O4x2x)oV%O-QSzn3MKyK:h~O`_Ot1ES#87Ny9see95S#+)k,w,' );
define( 'AUTH_SALT',        'MH EOmG>uy4Z,)d-%XJa/]NhK(DjtWuPxh2I.59fbI0FC$yq1-%OxABg Ht=xyXi' );
define( 'SECURE_AUTH_SALT', '7I.d9tGKbHPh64|}h[?Yg:/N>rDB9veh-*Zh{JDnWig]d>MqX%^~dM5uf*Se;}[l' );
define( 'LOGGED_IN_SALT',   '_M!g1hpToV?9,D0oT@t.,szFm0oADT#g`*_-%j$0`VAK~Lld(e3;0~@A@</]0ocd' );
define( 'NONCE_SALT',       'h<JIB2~lT,(5ndRtiYaZ}f_#<jGH-|)Nl,~UQ&3 R6 UDo{gVOL]y3a5hoL/9{zd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hs_';

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
