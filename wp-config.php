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
define( 'DB_NAME', 'wp_db' );

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
define( 'AUTH_KEY',         '`B$ke#^119f%1<mUQ*+k%9r=U$jqU#6#2|uGI,yM7Gr}Jx/5|m]@_ LW v*,yU)O' );
define( 'SECURE_AUTH_KEY',  '<f;qH^2y&DS}G)lj]!xm-Ebg:*0,o>/%6M!`]0}`-ORR3yL>FSJscfC)oXaOPF}c' );
define( 'LOGGED_IN_KEY',    '*iR jMY7LA>EL71WJ7Y&Ad$MA3K{*C:YaB)HO>mc6D(/ak*istA/BU> P6LzTc#%' );
define( 'NONCE_KEY',        'W{=qy{?Nh,1,a98Z5_YDQaf;%W4X#|0|Tkit[*n,?Rr!MJ]{=+ieIw4d,?Fud|lP' );
define( 'AUTH_SALT',        'emblu*bfU3:N)4@/(&o?NDSt%kD@+5j;PJ/FgLIyLLuBgZA; dib4zA)q_ou#Fg*' );
define( 'SECURE_AUTH_SALT', 'P]b=5Ae&X8r!y,6bs_<U(G1}W4gUM{>cos,V|RN<[;2r;Kep.,eV*;dDStX_6dmm' );
define( 'LOGGED_IN_SALT',   'bj99fu[v,i-@^HfgRnz|8R}}yq3!n3E*E2%*2va5?2ZURH+uLy>n+>m$L~LlJWfF' );
define( 'NONCE_SALT',       'Hvg1KH=TB=f,k:0).xK30RN|{DrR89]XM3zDv6wS5&5uUrNPkkSqacUvou7qZokI' );

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
