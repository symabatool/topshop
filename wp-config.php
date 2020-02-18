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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'HljFZ1Bioj' );

/** MySQL database username */
define( 'DB_USER', 'HljFZ1Bioj' );

/** MySQL database password */
define( 'DB_PASSWORD', '3bSHPM2SGg' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         '^}X.`y-SS[>CnIS`43OlzeMi!hr&3LuiHw.x?CS^;[[/Xv?x=N.`NBPU|HwW64>C' );
define( 'SECURE_AUTH_KEY',  'B`P;UWz~fv^sA-xyIg_39K&(jI$1bgZ.b#O+GQ?MIR*9>c=.,Mg{b6GC*el.B$bM' );
define( 'LOGGED_IN_KEY',    'MEi/W.+di!7T*y*1NUBQh^;64Z*{yk+mV{}(j-(6(nJQQ?6>c,sLbe1YaDSocE0:' );
define( 'NONCE_KEY',        '>zwdAPoMO}`C7_P<^ ])wmJibaPHlE:%|K^=Q$,`SL*dEZ<u@`[vfU:ifN!t3uTc' );
define( 'AUTH_SALT',        'B%!R#?j}<J#LchwRWe>M{t@hY_!*JYn1pQCA7w.{6Y@IhS0||`<?b]~8s,hjr&J|' );
define( 'SECURE_AUTH_SALT', 'q*H(t4J=P_<2B8P}AWeEm|@g[I@:+jkOX)r*1Zlx63+,xvHQM>j0r# z&l9{VNI/' );
define( 'LOGGED_IN_SALT',   'YC_KCZb+ i4]YO(mv02n%<Zvm *7jViJs+9j{v&?~61Z>~[fbAKknGZ^&^T,))[M' );
define( 'NONCE_SALT',       '/N@tejO8y[sw.Kl1{VoX6{+48g0&6*bqw68Knr. 9V{vy$QuR9eOQ+0]N8sRaySt' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
