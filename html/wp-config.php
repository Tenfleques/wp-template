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
define('DB_NAME', 'tendai_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '%A9]+pL7hf4^%#@%*42qdfhjy3)53');

/** MySQL hostname */
define('DB_HOST', '172.30.0.1');

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
define('AUTH_KEY',         '<(n(wz+)W#hLCu^8fJ]X$J4p@zN,9xs%a}e__C>=w5bns@0pPS*s#{px,Ad?F3.t');
define('SECURE_AUTH_KEY',  '!|8C#*rVKUbEbh~yEM<:E9[]^Ltp^+Ok)$#$YiRj>QtR}3.YBV=qsl93+(.1s1Y~');
define('LOGGED_IN_KEY',    'ULBbF4J6GPikvmNy#@YFnQ{:`yT>Q^OV;Hz<g:@1~ePHEXy8{oNG8(aIpA0{:~m+');
define('NONCE_KEY',        '(1IhqOlgH?l_F}wL,-];r}Spc4*9gc%`vAcYt@|E[h4cko=%ibV+z]a#DZDrym?b');
define('AUTH_SALT',        '%$xL)p[43BuXjtJVnM6&jWlLePv&im=sC@,jZut^)2~}HMW-e{[aB#P3$d(9VC2x');
define('SECURE_AUTH_SALT', '6Lir5-d$}iQ;f#(uma.Kn.?j[vEoeW0Rf*+~9#6h{EY|&A5p_:2eq8haiNi?%B_F');
define('LOGGED_IN_SALT',   '709+CKjO-((;R 22#!rvv{Dw2H=a0?) <v)0Z$HolX*?LNaf>pAiAb$n*^#V3C$.');
define('NONCE_SALT',       'm3->#V#~:V2#XCl3}2Wa@Mjj;#@)teEi%KgqpQ v3}p2$XB8,kU&V0L_sV&*Xa!X');

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
