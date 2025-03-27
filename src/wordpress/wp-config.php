<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

 define('FS_METHOD', 'direct');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'mafIFQMsm9Q~~(OqFYftc ZS+FGJ/>rs(ZEV^l8nOt(Yv&A!a3I_PLMjM/+/8&]w' );
define( 'SECURE_AUTH_KEY',  'nr<Rn>S%|7K5Yzd1CA`$AiZ7b3XZQ*eo_r-4%?w~PpmJ@]TVrUcn;ps3#A)dGH*~' );
define( 'LOGGED_IN_KEY',    'q5IF0UmN<7_3n^g@+,(*wvjhTP<Q~W*+MO,jb#jy$!=Fo3z(Hb>iW]=gS9FYvDiz' );
define( 'NONCE_KEY',        ' Ugq[O2sI-~;S(tsVm&}r0QJYCa[o#?#sD/r1+%ArL)I!w|K23L#,%@wM~nb--0O' );
define( 'AUTH_SALT',        '_fqpymyyq}u~RBAr/|X+&gAGF=NzMWK#eF6R17P(72(yiJFCy$[[-mzVXwvlYy,1' );
define( 'SECURE_AUTH_SALT', '&NOBeOj$2B0nYR,XW99@dni9,7h#=V@knLYy7@%i65+wHy?Ff:=LL1Wj*bYC|wHe' );
define( 'LOGGED_IN_SALT',   'TMFWSm]i,k])l]&4N08u]w>!.dRD3?&;qzTOR6[}Bsi^.NmM{-n~L|9(H`{-Q~|P' );
define( 'NONCE_SALT',       '^x*#.AUa}.iI%[scPm^X!{T><VeR7$?|1xY%v|xOL>m.Y]$&3g/UuyIm& {,=$,}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
