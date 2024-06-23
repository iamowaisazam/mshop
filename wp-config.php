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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'irhaulyx_wordpress' );

/** Database username */
define( 'DB_USER', 'irhaulyx_owaisazam' );

/** Database password */
define( 'DB_PASSWORD', 'irhaulyx_owaisazam' );

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
define( 'AUTH_KEY',         '/gRpc~;?ClM~JK2{Hh0zJ:MOEmPj&*c}c_wXAPnwYoogP9$#SgLC`s]<?=L?f,Eb' );
define( 'SECURE_AUTH_KEY',  'C{V5&N1^ZPNw&KnEY>K58-9qDua%tVi48:.8T<lE12 O)WKH]TfddBye-Jy].:lu' );
define( 'LOGGED_IN_KEY',    '[@f*_r3)4Iy/6=/?Lm]|0PU9rN]}}p / aM496uTY*U>Z]`:j%n++E>*fpIu5{QH' );
define( 'NONCE_KEY',        '2z[fZA[ [OC-6E_6[UQlb8g?MM?W1L*nr7X<2:8uA@+>@:7xJ5}TPY`LAb%N$p`v' );
define( 'AUTH_SALT',        'q>*j{t3JdnJO@a4oNICT] :04I< jv8/SW5o@@!M%xDo^0o;}@C2kglPGn9BMba9' );
define( 'SECURE_AUTH_SALT', '|05R~C^xRJSnDC~:lU$:)zjj6,bTdAv4aSs>?rUU5)?FfYdUk-v7kQ>L4mIRkJE]' );
define( 'LOGGED_IN_SALT',   'A/j&Fn0J$hyLa |fy>uIjmkc8i~hQ32:N=#pVyY:dxb[ZukzatRd~B@z[B&`O%yh' );
define( 'NONCE_SALT',       'A&ysXA{T^?T|g.Qu.|zp@>o:x]He0)-d8p*bm![oipco~3e5P,c3z2B11(xYk%WE' );

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
