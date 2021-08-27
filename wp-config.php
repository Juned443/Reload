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
define( 'DB_NAME', 'reload_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1#Ju@4A$' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '8{lY_}@X-oGIK0>F|5[m|]T}FfmK.Xnr&?Z|EGJA{dK%y ;BBAX&gns=HMVk. W}' );
define( 'SECURE_AUTH_KEY',  'K`c~UX%jk=[<]<V ^`V!jUBm`Ydt`FF&de`b;5seB19yv3MbBrws1ko@fjO6)2r:' );
define( 'LOGGED_IN_KEY',    'q;_VJTsUl8grECPCIJ_f{P`4KHu$P9IKuF0(f,vu+LYl/k/9`1IB|p, 4AQdqw-j' );
define( 'NONCE_KEY',        ',;,|4^Dnqi:YpR9&R51zwBbyrC43],UJm)myfbtM3a*6IbaVfWUEbl5ZP.{S/&38' );
define( 'AUTH_SALT',        'byogQ6D~A}8_v2L}XWPJ_D+F^!E[:<%:t!H*d,`bxD$cIho)S-CIG@7]{),&*s~F' );
define( 'SECURE_AUTH_SALT', 'LnAn)H Mc_T*CRH@L}Yq|Yi6Q#s$hixDEW/$H4(hU{Coi]3H&:b[BbqMTfPoK8ff' );
define( 'LOGGED_IN_SALT',   '|9{$S0Z67Ry_8Zw5Yk)_47g6Xov0_/WcYHEFrho HNM]_L;dVy-.GAxILcVj5DkS' );
define( 'NONCE_SALT',       'vl< S]d_[-l1CK02,KkDMG_4C.!deZa&`|h8.LZu4H*xp2dS7+f)E=FTZHur2>8V' );

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
