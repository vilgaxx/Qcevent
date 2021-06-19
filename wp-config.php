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
define( 'DB_NAME', 'qcevent' );

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
define( 'AUTH_KEY',         'R1<F>mMhFi-9-AS`{rNN-_n8%cam>GwcFy>_K4@<6bR-HE4oY<Wn/0JB^<hg$@0x' );
define( 'SECURE_AUTH_KEY',  'T9<`fAWBFfyqw&AjI=!z6u_iK:0#]c0jn2UYTBgHthZK&V]uXra<g9)oI(I&yJ{v' );
define( 'LOGGED_IN_KEY',    'Pz.]V(2u:=l90,]k[DZ6^]dv|1SC4B@])cK^Pq:vDYPgYl|]5O^Zi}[pMN&Zr&<H' );
define( 'NONCE_KEY',        'j@gF*jZ`Mz}-8<&,F%_?YV+!sTLHZg<OH-Ev);3NGtX6#}E}c3x +lSi;Oxv/9`n' );
define( 'AUTH_SALT',        ':x]*>Ar6c(b>JW&|S|Ak1^F<g<yN!9 iD)(@Z46<qanw#@NBC@j@r-r5(ZvwyBxQ' );
define( 'SECURE_AUTH_SALT', '.;3r{G~,iGD>,WA,/Av@B)>?x[MX_E5G~Un ?,V-P!s.&<*^2%U+*)sN%shB8(RS' );
define( 'LOGGED_IN_SALT',   'onvE2b3DlId.W{;%TtU]|`:{n1~53H5Bx}_`_6Qc+MMR8S[muZ0<NZ?@MPMxz%+k' );
define( 'NONCE_SALT',       '66eB/MW>5~yG~-r/ 7n~EpAC(H[:&i7<|=;me3%)M}ULOK0+~Km}m]7r|3bRC(8,' );

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
