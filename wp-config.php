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
define( 'DB_NAME', 'wordpress_suresh' );

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
define( 'AUTH_KEY',         'A$)/q+X<;Aot9SXMlMp!h5.6_3$a[=l*%:I4Y>-x!0L?o$qrG:ltYEBEUC]f]c r' );
define( 'SECURE_AUTH_KEY',  'P9sj+m h5ab/!T.:VU.iV|mr+ph,e|v6)O4XxmAoOp8$HK.#s^@ZT]OEX._.<Td~' );
define( 'LOGGED_IN_KEY',    'bUi`by[6?|GiMjImER8O lW9;sJBYC(ppM.6D2=rmb>?uVtOt I?B7urWH8PA3bL' );
define( 'NONCE_KEY',        '/%(%]]*}As/Eb]w{Ci+_U{7mJ/ERd H6sH?Zqag$s%2TPVw/nRa3E%3%(2/Nz4Xe' );
define( 'AUTH_SALT',        'ns&:F&z!ovw_/8Syl3Y:`f6pPuZ*dQFs,8O!&1yi7.O/=G6@GYCd 5(WR>Bu:sHS' );
define( 'SECURE_AUTH_SALT', 'OdOfL;v)B*LnvNL[OO%V81N_&m#BA*mcAyyfo8^S3cRK+Zd>*)*Q1t/PIOs/YedT' );
define( 'LOGGED_IN_SALT',   ':yv 4UDEqe^q]T^ h~n=kD_BvLbBZ/Wp&dE6lXn00{ztY4D=`=4R21kf$:wziI{C' );
define( 'NONCE_SALT',       'H61D5I`V+f(+0xX-k:Z*X(|->;E:<aFZ|7P;gA@5fE}!yWPO/0Ym*rZTRwNpDmF?' );

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
