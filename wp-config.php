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
define( 'DB_NAME', 'tienda-plantas' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Bruma2020*' );

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
define( 'AUTH_KEY',         '%Tqt&dbTit-<[HZ6><gh8l%~:A451r7+ABBHQQ;o o>v!RxYZ3jrcM*0/6.NH(%V' );
define( 'SECURE_AUTH_KEY',  'D/yJ`ikZT%G%d:x)W&^D$&8L2ia3>6h~lahiI-CT5xJ@n-v&riu2,$GWPrZ@P6&N' );
define( 'LOGGED_IN_KEY',    '=<L>QwV|&is=83=B|$%GyRtR7O0$^9ar_&m(:`E+(/W5,I`~Nv~Jq1[z-7%PWLo$' );
define( 'NONCE_KEY',        '1WHf/b+ v)#KN^iaX2 4Sdl_oP/kF^&>5]Hb}GJ$wADf1YluYW$$SEm|N[;FNH;h' );
define( 'AUTH_SALT',        'aU5!|5HU_4wv%WP^]^Zg 2P:oPh}MzQ2sQ8Qx1g,%Wk$W|lX5z_WG. `/VIS $?/' );
define( 'SECURE_AUTH_SALT', 'MgT}zS~ _o!uvHP`k]%/UP88xh6YrZ0 XELSuB@AFmaG1_vcrQ@h,|xzSzs#:H#T' );
define( 'LOGGED_IN_SALT',   '`]$y7.qTRh6K`[55pnpTz${V]%s-iLM(9U*HR@CR:sAVpm6f>f@<l:$%eE(emMQ`' );
define( 'NONCE_SALT',       'p>_{Wr>GnZ;t;ac4B2SLh%6jJ l~S-HRh~CkcGl}Dxg+3N}L:~wMomg;rKx8&fey' );

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
