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
define( 'DB_NAME', 'clarafigueiredo_mysql' );

/** Database username */
define( 'DB_USER', 'clarafigueiredo_mysql' );

/** Database password */
define( 'DB_PASSWORD', 'QZ_$w+%Y[m2*-TyG' );

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
define( 'AUTH_KEY',         'UKpaMo8X>=AVkUH(JJ/8#T`hrLOtRm+@T/&o0`2AsBk8V5FvP=Gtm8;{|p8W!GGQ' );
define( 'SECURE_AUTH_KEY',  'cksqDo* ~Q*PNTk{(D>a~e%hL/$OYja:FILCkV!Lyg=M^A9fDv^?Qm_K%~^/:gp4' );
define( 'LOGGED_IN_KEY',    'lzN~L#uvhRG/et^:^S:FQ3myx#5=9zi 2k9~kA_EFG|<kDs<~E~CB&K2VcKkB_2|' );
define( 'NONCE_KEY',        '>G70sEZQ<@iIKO&/XcHv;*1:eil|iJ:IB[(8J-w#T57hc9[0zNW3L87N%6yo6^an' );
define( 'AUTH_SALT',        '.fTp+i7[7CWaSBb*1)pgyqScV;*$C6:-o%/kQ~2V^~Cy{sfea{,FN3E=Sy*zS,D=' );
define( 'SECURE_AUTH_SALT', '  )+- agsN^wj>YqBF6UisgO&@pC,] 4T}$S5E)xJGV+bd+Ip:/2>G{O`WYdcHK6' );
define( 'LOGGED_IN_SALT',   '(I87r2OMSPq?U_#dF5hpyy6a:8Xk2>>-2!pN$zW$F=^J0CPbJ*_b)~2I2Y-5`9yw' );
define( 'NONCE_SALT',       'inI(TAv9in:7w|Xy$5^i8BI>4dRFj^@v$.zMUxw/?+C ~d/LY06bqLii<nHTe]%v' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'clarafigueiredo_wp_';

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
