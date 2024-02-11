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
define( 'DB_NAME', 'wp_portfolio' );

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
define( 'AUTH_KEY',         'feg0Y)U}Vht<LTdi>0gkZ/kdui)a{@Vb?mLUl8]VQUMF f75sCsVT*JlR+5x}<Ak' );
define( 'SECURE_AUTH_KEY',  'ZL>?~}xsyc5`iM?6BH{sUZi>=IR[Sp/sR<}.lmM,{wiW$XJ$jO r*0-(VCjRre(G' );
define( 'LOGGED_IN_KEY',    '!D.!R5dGP{>BkVRP@:nd)OKJ5o%!uXXBEv2wO* no5?13T.r?hjj:Q@th |g7S%h' );
define( 'NONCE_KEY',        '#T_4VD{f@>Etje`NdB(R)~?>A=2gAHped{s>1/6naJt53CdC>O7lSZQ7spd#I S8' );
define( 'AUTH_SALT',        'Awon}pjq[Ob.,w!==e=[wQN[gLGOxtP)BG&Sw,2ME|+]T]CcL1I2bdL|Nn2Q$:>9' );
define( 'SECURE_AUTH_SALT', '=5b i%jb6Rr-{%y>[J1xqIIMCm~x;9JKXfU/rB,Y($q>kB!=%Byl:xYszOau6>s ' );
define( 'LOGGED_IN_SALT',   '!UO6?Nv9=WmU8y8t_K)kf1BkXYkq|Q:f=|q7tB!#q$`^]/^Ds#u9wj< hl8#8i9J' );
define( 'NONCE_SALT',       '!b*^8>DUl5%D?Qe]bPkP>#Eh`gNc w]v+%|l6_<2K3w>&y|0~w[Z6.`G+K$r P[y' );

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
