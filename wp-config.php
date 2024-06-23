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
define( 'DB_NAME', 'msibd' );

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
define( 'AUTH_KEY',         '!*AaF@cB~DaE2KE+BLr,ImF6={YnmE$}76fi7l{Ujy2Xd*3Df[Eo>XFbM%A(MQDV' );
define( 'SECURE_AUTH_KEY',  '~BI#bna{+E!$@*W#jD-B E08u9S _,SL+4l)CGW;(!Vzk&Y(8WNQat(;!{ ,n8Y:' );
define( 'LOGGED_IN_KEY',    '_C%8|[w^M(O}2H7qv5GC3b|&Op;<k0x%c3z}p(ES+J..DIX)s>Zl2]fr+[+PC?<l' );
define( 'NONCE_KEY',        'NW[W4NMG(#q[&`aEnVFi-8uIt6=AMYI0}RXV C4m9<b.9>1:4KqSP{@k_q,yKy>`' );
define( 'AUTH_SALT',        '<xc@rnu;{Xat$bTpW|A(;4KTNr:.IHNWh/K;zG`{$C[KqMYMUUHonWfLj.*($W_q' );
define( 'SECURE_AUTH_SALT', 'u=Ql.?NS8R`Nvc.bE1 L~bH+zXs9|cH>MJNMs{7ZH-I{d.`5FeDqB0o~^crcf5aW' );
define( 'LOGGED_IN_SALT',   '<:y)jlF31W/?):tUG70TrxrpGPa[Wcc=SF92HHm)lDs#ce@&7ZH2[iPK/e1g-&d~' );
define( 'NONCE_SALT',       'ScmP+4RWx+}O0[i* x[B`WH@=k8Nu(3ggMp:jTZ[WDJX1{u?A`SOG0@}XO:<kRkD' );

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
