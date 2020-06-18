<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bdmonsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zE*!xe!r3>$nt$}lQ0gI/G gDRa3EQ?_z2/_JUL6H>y=;1>[yFl[K:@/1U<!5YXV' );
define( 'SECURE_AUTH_KEY',  '7KbL[}eLTxV{OQcS5vyD6>1Mw:6Kl%G?,adKwhoA_4z#}c*G*.7J4,^[_{=4{TDm' );
define( 'LOGGED_IN_KEY',    'f6N[ALr0`pRhn]79nJvL%6zo|q>~f:Zbjb|2=`D<vi@h-vCw/v% J@cZYXm&oz:#' );
define( 'NONCE_KEY',        'oR3>YG!Zt;E$7HS0H;$ipRz3|jk U2`)L)uA~s-D$rkQ!)*$T;6Ow68#,XA<7VWk' );
define( 'AUTH_SALT',        'do[qo8<JZ!H#n!y->i5vlX6l  0%Q6p-rx}{p6J`{d8T&&s~bBGILYk8Un}7.451' );
define( 'SECURE_AUTH_SALT', '.:n:[|0/:w%T+@@4a(4[}us}zt4z OtLNZq>?T;)X+FCuNir0-IQ]XOJnfF%A5|K' );
define( 'LOGGED_IN_SALT',   '8ySt{LKC:Ag*tv(J-jjjl9M;OH%m9~x)ZDr(l#82GD$TRsNp(NjHFeLc4|Ji)RUg' );
define( 'NONCE_SALT',       'HqwFB|#.aX^r343f]x4RpU>$5T#UXi _DE:`~v72/!l(?]DELKd.;7gGoycyAdkl' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
