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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         '42&sw9Pj,1nU!.xQ0<c{5[< W0C1%FRk`&vwcVnH+2rFePu6HYJ`xF3R@IN#5CgO' );
define( 'SECURE_AUTH_KEY',  'H`2k`rYTY+8)+Cd id6HpH?StI$}24aEVb7?}]*M+3a}Ve$[KWVIOy@P1lWa|8Mk' );
define( 'LOGGED_IN_KEY',    'LHqc =0-nD4<T1CWyy6oz*WuPes2_ZU[{z~eyP7qr6T#mwJ^k%S7fwJjPjxWoB[(' );
define( 'NONCE_KEY',        'r[Gq<uI_FGGlnD.H)A`^>._(#ExsY<7R@Re(1:c=]*/<aNi&M:dHKL>)9$sztyt)' );
define( 'AUTH_SALT',        '?MdUMz6![X(O!,JKS;4nWkG# r=W7L#){*1CIcHqp*L8g)fx)IYt(Q%Ve6k>61pu' );
define( 'SECURE_AUTH_SALT', '/#O|280n5c-OH9.NK76][3j`F,$8gn$!COEvR*L<jb@u(<FaT zfOo@F^9E6 9l?' );
define( 'LOGGED_IN_SALT',   '8_G|Zf-DkpX?%?(Uu0^)KL za7I`qNWudtXCbJN<drJ.WL^OL+[]{(2DjD=39DxO' );
define( 'NONCE_SALT',       '`g+<S7e!.xw*BKrhn&cb2`{EV!*wC|gTwinu|;`|o:;:%gx2:lu&VtVhUXl8$$$y' );

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
