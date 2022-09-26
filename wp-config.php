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
define( 'DB_NAME', 'studi-agence-de-voyage' );

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
define( 'AUTH_KEY',         '1_aL;,m$$H8cLVH}*tSPuz/YG^OdIYVCwo5uRoqP|/Vrgl3|hu.A{h0D8;]G:xIA' );
define( 'SECURE_AUTH_KEY',  'nwdt(uR3^7TZK~4#3>11]&-Upu`lxPW2O5R%2>w(Mp}lm4oX-Rud3iyOA 9Z5Yr%' );
define( 'LOGGED_IN_KEY',    'PkKQY<4lpB@Js+vEl<BS.FaXFEc=ob6P=*6K`2$]Pvc>;.>f_~B^2`i/S&WK0+lF' );
define( 'NONCE_KEY',        'uIHvlw*xL,ciCQ)Gh5/]rOcJ{?^y?(s%#gJ,.!{#o1f16HM-1iElO;H%QtTZucN@' );
define( 'AUTH_SALT',        '1,C:cz? ~Dq)dUZR$^fQGC#cjROP8~pOw7<N&aQ&RLV7@r?2}J<4OJAN)KnDG&NG' );
define( 'SECURE_AUTH_SALT', 'scwCk>ky]ZVQ1Lx%w=R+[[epw?-/6vm4k#-pa07D3-1&]P[x]`kzdx/LK <PDF+^' );
define( 'LOGGED_IN_SALT',   'OI(6lz.+h^vD4s^L~[^,~Ii37`)sMhGYNVU,j=+Z,T_;}1!AWHu]}&rcvz_D{iYL' );
define( 'NONCE_SALT',       '#Az3,PI}PsE%5]5r#VeX :kX]4Y9XYUd+ALbeGw+iba_cnyau@_*%B=(rb9aUHO1' );

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
