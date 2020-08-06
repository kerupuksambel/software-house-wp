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
define( 'DB_NAME', 'software-house_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'firejacket' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '__iLYqyrTFslzjove?8}k;8`ZSe[z[*H~Q ~eU)~-ArIp_$/R-uv,|_yYe`!at}W' );
define( 'SECURE_AUTH_KEY',  'RIhsoVHXGO,1L1N&YbsipO^1+@Q+jIbfg(wXAJ8Q;H}0l7*-m4X+AXdy:^K@;~e_' );
define( 'LOGGED_IN_KEY',    'B*IC4I6</#{@OWyL0jiK/!v aS5j!T@oo&K9gDJ^D6zu*zNgE3xkROohn(KZS?Iu' );
define( 'NONCE_KEY',        '4I=53$X8:Q;ZUavidR][2{:)HCk@:j^FN!sKB6:6[{S?;cKpq9S<s&.A2,{0vexz' );
define( 'AUTH_SALT',        '#_R3GM:Iaq4]Fu.x~<G=C/A0uG=h/_sP:bxwvsNE=|`|5.&HBGZj&LgcGI7OR7[o' );
define( 'SECURE_AUTH_SALT', ';ZfP o<:v&CMEd%GRVumv3hy=M=3rTY@+@z2#re=G II#:0Z/8!]6D8As.+s5i`k' );
define( 'LOGGED_IN_SALT',   '#9/ +s]/7I<_8cs-Mg;/c4252`e]}3;t2t~tIQ!lPX]_%&GQ[_`Ng]S<65zHCiPy' );
define( 'NONCE_SALT',       'm7?J7p1~8+pZVS.O}`_-)Q|FO`W%CIYj@!f?N~Isyzk~;w78@@E+Ll98$C^*}-QZ' );

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
