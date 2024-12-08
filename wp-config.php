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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nep' );

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
define( 'AUTH_KEY',         'k9ndKj%`9X0ua`L/#v[MS*.~U,#a|,_#5z]TYJd_HT$%Zk/FXgYd6!<w0YV{&$/s' );
define( 'SECURE_AUTH_KEY',  'MY]Ys69~/KXYXe$^h{aLK-Wku{ve|c 519Q|_}S3PUnr_POg?pdq`hdSxNLd4%sG' );
define( 'LOGGED_IN_KEY',    '?xlF|pgZ8J}846r8P8)56}-XpU+ @R#^rS8t{-`2X.bC H[O]P~7[}VxxN^Tf}N%' );
define( 'NONCE_KEY',        '}w_7!w,z)DGl|`Vw9XU$*6#Bnqs$S*g_c;])=k`_wpf6`U{s*|b_mvXZ)}n}!COu' );
define( 'AUTH_SALT',        'F1AN2Ac:.bvQiLcQVftuBRoi(lNR8x+@5CN!59)#1A{u!R9F{RUps/FF{4})q=$*' );
define( 'SECURE_AUTH_SALT', 'We;<=k--?RCn&~na5+Tkf[[;Q-4.QUF7V6v9TV5OZixYkubN*1imwhSO[OyG)<([' );
define( 'LOGGED_IN_SALT',   'c Z`N=vol4pORgF4d&`e(`-eN9wEn%1t3)pYjDL;O>&pyk>}xrt9(6b/t.)9s rU' );
define( 'NONCE_SALT',       'yX%m2gA+-nnpm/C8@r{dS!IHj(ww@WJSyU}{rjp@_T/JvWcUu1Wy*+P%s_):),%M' );

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
