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
define('DB_NAME', 'jcd');

/** MySQL database username */
define('DB_USER', 'jake');

/** MySQL database password */
define('DB_PASSWORD', 'pass');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8SM%<qD2qkPW-GB_W|4%`$J/6H>par=aD_|cvFi-6 lFzPwHkE-ZdT9%0m{VHOt)');
define('SECURE_AUTH_KEY',  'LbF,d0#BjH-koo8(heT[ -hPWSn*p)mA+0Ud6nM/}o9[-$-M/3F IY:QzO|XW(+T');
define('LOGGED_IN_KEY',    'b|+b@KJQ2(TitxdQr7#_IsW39]~/z>TvUyS;khv]}#:nXgKC*P;v 3By;@(y}+d}');
define('NONCE_KEY',        'E){#/| FL+l5vKiAy^oXcxn#m1eZ}pFM8L#]ZX0n3o6W*vLXLIe|$%sx2Ts {&uX');
define('AUTH_SALT',        '+FL(I{=$h<7ArW],U%C<lF&p*{K|6Jkv(o![9<$,rHjJVh!^<So?H]R!H~Xk7`wz');
define('SECURE_AUTH_SALT', '+ l=6mh`;aD~do?;TTg2xS3<C3d<X=xLc5ZQ75*;/}druc;DcG}`TMyWsL%DyD.[');
define('LOGGED_IN_SALT',   'e=$E[5vs!3Df}sw^tMfmK&u0Je6*U^#9eXr[$4C0etGx<b%muB*6Z(i5%XC-G@D9');
define('NONCE_SALT',       '6_jucx$b)!O+~JED6tpjO^z.Di6#;J<&%QYMQ[d5*Te[vjs^_;MUlHT-*2E|]CAx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
