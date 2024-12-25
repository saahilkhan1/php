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
define( 'DB_NAME', 'tested' );

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
define( 'AUTH_KEY',         'sa=2{^kwICuuheVON/+kIC]M%!{HcQ.jOEj!vmpdj%h.pEmlza:YmENL7V{.|~q-' );
define( 'SECURE_AUTH_KEY',  'f,Z(@aLX./M!V+c0|7Bl3<K2i(+u44CO5k)A/-Bmg9wieVwlFiUAdKRiY[^qrO9m' );
define( 'LOGGED_IN_KEY',    'h;&LqQE9Z.S7rN!`B[3?;g%H_4o^QU.g8`8=:1-WTXvJ:)_4X10v.Vqi]7*YV&b{' );
define( 'NONCE_KEY',        ':k(03|m,Q JKq*E)^_D.R9HDG[Q)7uEUF-.cCx-W!$}Jcs8UKB%P)r@Y9o Z}@4=' );
define( 'AUTH_SALT',        'T0$/Dzn((sKP:G+27B_M,ADUf&.A/u)cf%xIl`pm KCl{T|i-cQU:tO:L2-1r(c%' );
define( 'SECURE_AUTH_SALT', '@>ZmQR:riwaPQU1kX*CMYX )Zz*u_v8Snzy8GS`lDB#T;*qmsKO=c+7]$P%v4*lO' );
define( 'LOGGED_IN_SALT',   '^ -KqU`90D>1cVy)*H:/-cNC1EHOAG0X)}72=S@Rim~*.C[ROV<$6UB!lzk9~};p' );
define( 'NONCE_SALT',       'N>ZxOl5dLU*zoat,:}EI=D58/rQwU#m),Gi>Mz@1_e+5(ko&G|A7_?.bIGaslvqM' );

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
