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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'DvBlG?$-uIn5W(qO$<4FF7o1oKFK~*fK47e`K6Y5R@qkfX:2@*|5~ <1Gtw2|x`:');
define('SECURE_AUTH_KEY',  '9b$SeD]*!#D=WJ_uK$_LYiWQ=[UkDku78vjPzg5)oq;8=[,|5|WDk&uI`.`20cEJ');
define('LOGGED_IN_KEY',    'J~nP(016ML8_B?BS`w2 JQ{1!L:cTX^F}+u#kZ%6Ul_2r.r_hcw|a^|R:R13tpI;');
define('NONCE_KEY',        'c.qOY))Vd:iWW!bXrY|d8Cr0]:bDl(Yo+Ia:|3ReDr/MCyLmr|aw#NV-L[*a L}n');
define('AUTH_SALT',        'KA<0=P@x%JB|a!`<R5[RY0k?BW0B4(thkvv=cc0$I&FC_xL%EgS/Y@:nSVLtFTf&');
define('SECURE_AUTH_SALT', 'Ka)x66Qj]N+}J|-5`]h SF>aDdMn{T|`KnbEKEeD:/$)o!_wa:h~Yu|+Qh9m liX');
define('LOGGED_IN_SALT',   'r]0D=E1`gQx:v0K0C1a8-^%w& uECi6ug0jvFD;NN]]|QE-)+0 7qKpha~6A=aiz');
define('NONCE_SALT',       '4| zgl&:8z7 ^aY3o@ ;YwIns]XJ7/7)C9rns<bPZqer|22?jDFlJzEd^ QdIq#O');

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