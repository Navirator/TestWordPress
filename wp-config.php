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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'TestWordPress_db' );

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
define( 'AUTH_KEY',         '<>IIu#$6Nkxalq2rW{r&^p_G?=%E_Ex8wy,6 (5aFK%2a6/-bz+t%We;z}W1{1/_' );
define( 'SECURE_AUTH_KEY',  'P#mR?Q)W/_QcK <_PodS)P]@M|SDN<0,opc!TwJ~WkoqNGqKl]v9l+Gv?oL[D{NT' );
define( 'LOGGED_IN_KEY',    '_rB$guDm;+rF- TB(=EJS+L@[[>.uEzEfZnwVa}c&L2bK{xX/(Sv1*k=ka%lWN[M' );
define( 'NONCE_KEY',        'ZotMvIwyAn${?fPnpZ1IW,SPXn.*<3l-Muf]Ia]yC}11{jH|R5vT[k4&C|xJi`x0' );
define( 'AUTH_SALT',        'svG}aA<Zd$>HS$r6R+(CqW4XO0!]J>cb|)Jw})VVm6Ze5;k0fXbkC0*c:z*!_2#P' );
define( 'SECURE_AUTH_SALT', 'yVjB v>:%y/(e5Pxr^IgWS@ rf<!s7@4~Fwwf{sKj&`pJCGo*n+9G(GB?YfSxCr{' );
define( 'LOGGED_IN_SALT',   'Y-V;UB-_9(3aEuK2d[KO}lSb@73Ty&F6GQP9^u+KA}A]69^HB&_1~a&`QSEtCPyM' );
define( 'NONCE_SALT',       '[;~@BTNQew>HNm$ybHs]CeVp`PQ,lr}!^6W~XpE>tZv75lXYme}^wQ*9p^#XkN9o' );

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
