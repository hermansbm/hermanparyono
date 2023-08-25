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
define( 'AUTH_KEY',         'Q81=s)u,x7/+QaUOiE`B^n4fx&4nKR}]Xpo)=V])Gw@>1b!Q}+/QI.oo5{=#j^6P' );
define( 'SECURE_AUTH_KEY',  'TcMC8$WK.)>SXebX(kLlIZKcG,.>wIq@!>]qA6tv@xZxM9,p>FRnUf,K1L3mI1e.' );
define( 'LOGGED_IN_KEY',    'O!6:oaKAG)y-@1&?&[4iEF}6tp}0&+,hv}buM>_*0,[SYS#Yijt%YQKyeuTm4O(&' );
define( 'NONCE_KEY',        '$? #rTxtqg)bjOXEgASJn`*ngtoWOI30!m&!l7zTl@$xSTNh-Mm#BjK#qHcg{udH' );
define( 'AUTH_SALT',        '3P MsgK(1;1q-4!:QcvMDB8Q1+Lo:A]Ge{Xbi!^J&J?f>.E1V8`5-FXiX/T8:kb8' );
define( 'SECURE_AUTH_SALT', '[vhnVJ %Zba-FWD`lUFIrq)V7Psewjm+hG|FVMZD&9]xF0:U|19wKa`D3vhwP^ V' );
define( 'LOGGED_IN_SALT',   '6_|6oRg!Bjc1]H=19!zHppo$27i9R0wgy2,f8%6(w`#mw<g!,.(~kRZzi=_3E>82' );
define( 'NONCE_SALT',       'mOng+;<U6nPN%J>j-f:tU8nO4g/zC.AS+}QylI^&JVUf9?Ae(s/6hD-n7j8<D.8<' );

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
