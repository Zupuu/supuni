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
define( 'DB_NAME', 'supuni' );

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
define( 'AUTH_KEY',         ';d9_NpPBm}3:zn|Z}%yS<X]NEC,>(F7:^NC#jVYxh?1mXTAp!yCOi>lC/DWQ3_m<' );
define( 'SECURE_AUTH_KEY',  'c&10K^/d~VN=x-{{@X>YO^ ^yE2)3?Vn&HCiF`Oi9W[.Oz$qBCfWJeCK;tv>L^[$' );
define( 'LOGGED_IN_KEY',    '%<A?S!<Y+#RHft3[QWdgWR 6o:pDaD#,2cahe@wRV=Qhh@pN0s>dn^$I~lM%@jKV' );
define( 'NONCE_KEY',        '`9?:fk{v.wDjq~rfrPk?|WxVPk}yhptkk.Ie.~2uPchf!qvG~:_|2/y1N=[L2:?f' );
define( 'AUTH_SALT',        ']PNC}Xf))1UE,KR>VWcUMv[2Zu_h}s1mDfUuKfyXIZF/|2p,{(B|f5=fa@ODau:A' );
define( 'SECURE_AUTH_SALT', '+NY_}<>-Q} f)GIGXHUBj)KlCN%FM25U7Bn{v0Qr3E:g5%XJ5;  =@L bv(DkG/f' );
define( 'LOGGED_IN_SALT',   'z8[s6,PerL1^bB{@=#eD%&gXi3~1mUJ+EHQrFA_|FG?y51ql0Ch;2,g(cM^3SIm,' );
define( 'NONCE_SALT',       '~06k:&6#]F<Rj}&9&jimRZD7w83)SJj+3Hf+Kf/flT}BM7`$ByqV+}=obRL.,j5o' );

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
