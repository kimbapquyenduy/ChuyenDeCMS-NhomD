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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'tyXW92vRHgytZZ!3/0VA|)&1%f:~)eEEvY:kyhc#feGx%sa)K:o],R nU~$8a91h' );
define( 'SECURE_AUTH_KEY',  'K/q:5thgDVT!@x+){@mdl<E0@lzI?I y/7vUX,Z)%53L&]c(/VyxLd]T.G4;HDov' );
define( 'LOGGED_IN_KEY',    '@<5.17~x%_gl:A^qE]Xo-9ILN}u};^MA/uR8gZAXj5%4wK,;: y$<|6a1Vf6nl@d' );
define( 'NONCE_KEY',        '}p(L%N}g) 7{?A_#zF}W%~7&I%k)x=M~>Z]tV2U&p=-)v08k W-mn `GI^}m[KRt' );
define( 'AUTH_SALT',        'X3^3NBJB)*DRzh(2A hhY><q{Vtu.YchL6Syv2Xz4=tz`m~K(?9_*%:E@Pv$ZJH=' );
define( 'SECURE_AUTH_SALT', '8=dXKO=x~Rs#nJQ?C03a,Mr; 8h#84t,8Um}idM~o5Tun2kMi:eG%]x?7K(g@XFi' );
define( 'LOGGED_IN_SALT',   'thL(PI9c?cfp#E:elyAVLhi@ve/:Z)8~eR.(UL 8*)WEz z:$m/wL9Js<~3UYd)a' );
define( 'NONCE_SALT',       'kjN$~64<1}YG)Yrkq+DFt%`_V2|^uGO{,FP7YIs#ipE!O!qlu!VRA4>$NAPwhI$a' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wordpress';

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
