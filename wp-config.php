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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ';vSNOS}boE@[9hrl^yL;+)27r6ZWo:T(Kd i(qcG8Z.@25O>KcoD#I,xYP09PL ?' );
define( 'SECURE_AUTH_KEY',  'B[s_GSNhZ2gx =cdb|<20i5gnge=PD.Y5/G:e;N$%cA!8<l`K64[p2u^MT{men]H' );
define( 'LOGGED_IN_KEY',    '1$%>N .[jYCJw$1=k6}lHEx_Uw`Z?dVoF/,t9*; 72X5-`1@*^ot__@wKe%#)#Z`' );
define( 'NONCE_KEY',        'tAsdIIn10!Oub=hAQx*`Y fm7JOh]p4ryqv_JIlue[1vOvZHK}pU6XoksZ3=|}qA' );
define( 'AUTH_SALT',        'R!Ej0N3=%n1aF|[*>#:!P8:HEA#7J7)!<:xo8nsB!mn.L3k70L=Nz,05@>qH}#FT' );
define( 'SECURE_AUTH_SALT', '=uyhkG+}h_9=/Mz;faGgry&*6L^b jTVYrzw~5_pWakV`A5hh@V>ro8QN26ZXAX3' );
define( 'LOGGED_IN_SALT',   '.zIC}<1A!@Klrlb|,57Z3i`Nlv<C?3>>U0|%`yJrp?lF8WLdF<h-vpUKN|]omW=w' );
define( 'NONCE_SALT',       'Al??=)[ky2Pu|zWZ57oBSC0_`S>61J}Qq0cbSW~%)XDH.Ve28ZFxg +4V$FF@mo8' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
