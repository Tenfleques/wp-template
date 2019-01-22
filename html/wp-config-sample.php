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
define('DB_USER', 'tendai_wp');

/** MySQL database password */
define('DB_PASSWORD', '%A9]+pL7hf4^ghfs476%%*');

/** MySQL hostname */
define('DB_HOST', '172.30.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'fIxpg|XxW3v&>-pN<yg6IS:%u~Ctd=|deBr8YXn6Q1=^,z:2<##n<sZ|lMDN`~0G');
define('SECURE_AUTH_KEY',  ' T,0:V2@]mBC:95Jwjaic5[)1L#5 @1J^i85 s/-qluic-i,~|JyXLzuK00FCmtz');
define('LOGGED_IN_KEY',    '.|u9-;6^<e9#Gb`dNTwd6m-5NRCbNwh4|m@+mS6upkw,%|)Z95./mP;-y<tf+ fA');
define('NONCE_KEY',        'YA]]abgw/fIIjXPJFnCIr>g13We9>7AiBXi:!Z0(M(9~Tdu6~gqy,SUC>O]gofP:');
define('AUTH_SALT',        '%]FB$2=C 2hj-wCPz_+]mI6eH3o={a9,x3>tm6juv2[$$.Dm{||[S4,&POaj2fAh');
define('SECURE_AUTH_SALT', 'O?x?pg}I9(t0x:|z4*3hIy+G$-S_Q8]`xERZR7_zL,G3fPpruFD8|u$^T<VHpx8r');
define('LOGGED_IN_SALT',   '|@djdm:l)!wRjyh7T QHTfez{1g`2s|t+D%OUK:W#fyyt90EBfl!Z:AuQ9K} @1x');
define('NONCE_SALT',       '> 6ta,kSB!mdOQXCl],LyE4pHn+halTNj%MUM2!Wl>yZUGbO_%%M~;fTh|N+m`%D');

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
