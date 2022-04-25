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
define( 'DB_NAME', 'kedaimiewd_db' );

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
define( 'AUTH_KEY',         'DEg:HE5{lGaD/YeF/N~}|7^ZQ/@Q=~k`i]ElKRkeGQAgDIM u.<>=vP,?.TSI:z!' );
define( 'SECURE_AUTH_KEY',  'Z()y$PB9Pk65LF|P(*zIiPtd6_wtm|Lx1]*S(eL&Fk_&(`&-_K[q}O%h8rn0H>}8' );
define( 'LOGGED_IN_KEY',    '%IY~j`itSKw^19d!l5[Jm=q*7#nJCpDeOO|yK<y]??S<5(D?Bb&,ap.~:CaUr~Ga' );
define( 'NONCE_KEY',        '!CA{6I@m^.S=W2oDCd0K,KDuK?R-Oq?p-t5PuEcM8;,v XT]+MF6=EfgYT&~=8-v' );
define( 'AUTH_SALT',        '><Ph[~1}opPO*uu9HRA_eb+JMYjjVWli]6n;[UhR!^{kT]|fc|<jEG[*n o:wpnT' );
define( 'SECURE_AUTH_SALT', '{[V#?OA]oNHNDzB[NusIZHir!UNlP28+F4*n0kxC(Ltj3bPhg}Q[CK(`64j`7k}4' );
define( 'LOGGED_IN_SALT',   'Kj#dmd6ZTM,My~xZH>{R7)RT@lgzCq{-aV0peM25%-nBFI,9VBtOXCr[~n;)9jWJ' );
define( 'NONCE_SALT',       ']!9p+ci6(C~1=i$Ob<L&GxqcmGRPMo:M@ccyI4HLsv(;r!gX$pD$)h+a5&oKIYvE' );

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
