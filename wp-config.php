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
define( 'DB_NAME', 'maxbridge' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '@|eb^]vx=NN}aXbX$[.vmYsmKGq(ic(2OJxM~7dhuxU@d$JM=*T`jK+79=m4V-S4' );
define( 'SECURE_AUTH_KEY',  'H7E!Qy *[fWvXag9hEtF~:!+2nmnnb$dcPouH^d{^$FhEqUBI4NNL=Gzb*]nWv7S' );
define( 'LOGGED_IN_KEY',    '}v9Lu(|iEC~ hsr~8w33)SNZ!zN[~XLl]IB]x~HV+r:&6pmwd^OTg-ZXlu/:b:/`' );
define( 'NONCE_KEY',        '#8,hz]2lkEky]W {@9uY6ejt4Zg_Bw6Qf`3JB/q/Tqnu,zFFL33=w$|h/~5P6PUx' );
define( 'AUTH_SALT',        'EpDgQK}3Pwg>PgtosVoG;}[I5+T1T</QeGDuc-Hz$J^Jg2n:V-S.^gx[rN@1$TT$' );
define( 'SECURE_AUTH_SALT', '8fYL/3/?A`$Y56t;}-v$8d}n.MIF7He+3{C%RLZ&cZ_T_#,oaLBH=Pi.Pg QkoL&' );
define( 'LOGGED_IN_SALT',   'n2 k @7(i,O*A(k_AJi{f0W809ii6wxD(HEwx7vFJ-`(uXU_-=?;tzD8=<#SNq}Q' );
define( 'NONCE_SALT',       '$G(A]Q)!8&hM:f&KCKiy+P /jl;W|ko6w+y1&$sw<.zS}ti[BHQGeM^H1@CmU6eA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'max_';

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
