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
define( 'DB_NAME', 'vitrine' );

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
define( 'AUTH_KEY',         'J}(8&tv}SP>MaFc;STlBzM/2=|*hvAE?(l0vN.0^utR J[KtsnFmS#>9KMn~:E ?' );
define( 'SECURE_AUTH_KEY',  'q:rtMlke>$]|2vg^U%+eyBWb78/70hcfID]C=he_<)yu(V}qrs7bJ#)/F|n-D!$(' );
define( 'LOGGED_IN_KEY',    'd=m?K9cb&mKJ;RbJeK~Sx6HtnZ7p<#jXS[bj%~dM|PnK}-dZq?,h-anx`kk^gK}L' );
define( 'NONCE_KEY',        'd!z(Dr#jNu5@PP:8u+>m;/sJ$_]~s#f[}NeOTFfb YxdoH7{~3|vv}ac}.a+T=3E' );
define( 'AUTH_SALT',        '<`ZTpO 8.5`NqeR1I|JCxEaOkAS_)?$J@l42)kdqjLXYp@J7gTHa%*[z#D?#[gR&' );
define( 'SECURE_AUTH_SALT', 'X]F]8Z[H#2rxwpx}`(6I*21pcl`-4B*,VxQ?j:,=`z}k 5S>fLVn6u.e[PNM+~._' );
define( 'LOGGED_IN_SALT',   '^z1RP7G0#FyrQBl#j|HQt`vbxz^F5/~?y=>amwR7zcR5,0}ycO4Spc {adDd~j9v' );
define( 'NONCE_SALT',       '-5wZ2!f0sE%7yY7t rUOq$s7*x(NIk}UBMoSt6Cr$,`8vBr>xo|kL>3dp79bpUIh' );

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
