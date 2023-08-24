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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hermanparyono_db' );

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
define( 'AUTH_KEY',         'BCo90mzJ.HnD%RR8tyd?s<`<F1RklJkmH`4/*iG[q;=Z)[b1iyu]ih-s{ZBm(EGx' );
define( 'SECURE_AUTH_KEY',  'sfN(E:Ow9o(G-NukJW(f+Z1:0d _/E#*F>+zo~yWXLYvi#%#&3!W6MXRA>eHC*6B' );
define( 'LOGGED_IN_KEY',    '&_a+qb%BSM0H^fq)h3zX)z|L/s9v;^=e!;7|vhFCr~[DxwxL}B(*rT8gY=iNY6h4' );
define( 'NONCE_KEY',        'ZM2c? S/gi//w8LCOg~dP+p##s<G=itF>k7T_dXM]OT*I3f^n6fU9)h 9-<i+ef(' );
define( 'AUTH_SALT',        'sd35w^_;nkQ~~M)>[VNQ;z@p}S|Du7MG};`Gyc@HyZ!,)T=FL@RJVj5T8vAv8Jo3' );
define( 'SECURE_AUTH_SALT', 'Q2m=wU+$A_r1zOzB7={`Iaeg|2oOJn&eBV_s1?aQv>j$AFE9F!p *)-(%Cae~S6j' );
define( 'LOGGED_IN_SALT',   '_?tr0U u<63?o*~/~?3[qeZ<=~zIpO:C(S(v%;L>MHq[i&}Vyk5tGrmrI2wZU!%a' );
define( 'NONCE_SALT',       'm0]cssL J0u>^g|lY J/`q}>X& A,{9xEl0Su7Rp#znp,y,=%R:1+TiOy}.[3fA;' );

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
