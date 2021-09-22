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
define( 'DB_NAME', 'wordpress_581' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'bW&iBriRh<%@ +T@W-5;&WrqKp]*$+X?V(mZ?o-s%DJKmO)/w@;JY{?h$`_a%zgJ' );
define( 'SECURE_AUTH_KEY',  'Y* <]R;9]IPKDAMv[[#zUO;YOASyv/>})XvW Oil]8eLT?p)lI9fr6q>o!y`f^9[' );
define( 'LOGGED_IN_KEY',    'b<,rBpec0=$V16;B@$K3g(9){sLI]BmI5c&;e?D77BpD-z.KC^trM}d}HVClm2$V' );
define( 'NONCE_KEY',        '{(,p+{!Y:46&GEzZnV+z/G?!B[G$?kH+.ve-<Q[31MX`DH=^cL6{}$@DoW<#4wJ^' );
define( 'AUTH_SALT',        'RJMc8-Y?{&$mSHSK{@Z&ehmebw!bB*c}*-yw=Vx<gM15RKD o(+Kq+F]-#(.7<$<' );
define( 'SECURE_AUTH_SALT', ';UsY&CyqvOW%)| =_u,[i0)nC~S<nN^G];,te)#R:3RsdWcKm<4t_(=-i9znbq=2' );
define( 'LOGGED_IN_SALT',   '[`:Am&3}zOZS-VpC+yOwS:glE<KCuv%^*)nX1`oxO|LDAhK]L7$xe=mKG#3l(7Lm' );
define( 'NONCE_SALT',       '+>0jP%iT0Vwh T:4?TB24)r3mLsl%+|v,d__:lX0t/xxF2HB.%k#<H[|jQ]yP#jn' );

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
