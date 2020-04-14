<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2]=YDqOV--m?0,64[+:<Z[>,qj?;c(H-3Q$kUJzV[L,@Q#`q=TpGx0i|M(mtRux*' );
define( 'SECURE_AUTH_KEY',  'C*>%5Ry addH1w[r;$4dU o:29RMdnF@DpEyw%1>W ]V57,i[^4{&w<Iuwh((Xi.' );
define( 'LOGGED_IN_KEY',    'McyVH!}>!?rr_7|g|/J>go(Cl/3?_YRAIBi#JepXbB0{vb_HpS%IgtfJXVZd*e^M' );
define( 'NONCE_KEY',        'IlEvZ)ORjiKw^6D:g]RXl]Rr?g`G~K<`4{kKSh>w~CvEj zD%y3]$!vR)(x0G!2X' );
define( 'AUTH_SALT',        '}mi$E7K4Y>/.VYMd0MwmjM}$U;qLLV NMf.X#Clh^^5;n,HK4BcX*f9_ph&WbOlQ' );
define( 'SECURE_AUTH_SALT', '3Ixput)E+r*Irx+< UVf^|59smj5||EI)8p;vV%kI@XlYhrRDNv1-MHO`fYWuOe>' );
define( 'LOGGED_IN_SALT',   '0n8wimo;u$3OiT:P*pb(l]ENCA<Ol#NG}<y<Rv#~PO8AIJ$n2doN>]*1Dmj]*6GU' );
define( 'NONCE_SALT',       '/9hbZjmj,%36Ox*kF4LYl1nRc@J/|!{d$P>(!pA?GYu?f=t[CGbwm|s$k@;DG+$W' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
