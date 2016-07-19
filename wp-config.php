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
define('DB_NAME', 'producer');

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
define('AUTH_KEY',         'm+<r>HXC(r20Dr-),}EF05d&;cpBDkE2ZUSQjxf=1UG0}`k.%|a[9c:d3.elHHw,');
define('SECURE_AUTH_KEY',  '~[f^)Qm_npn~21}j{~99tZ0jGV~!UigOeE>9Yanb;PRn54~R#s:8r90$XARZIt:/');
define('LOGGED_IN_KEY',    '9GIfgDhh-?A9!$sbqnpS4gbl8B}daG,?vy;M>7(3vy4;@ZE3DQuYKAP1$T}T-:&c');
define('NONCE_KEY',        'u<e7?PVW`%rldz)5Ab+_O[U9:z{g7mv8laO9S;Plw]2dvIf`0mybP);7}WT2C&%s');
define('AUTH_SALT',        'qPO{y1@&Xx7Vm&UoLzF2u@bmx(A$a+xuOI,&Fo;RYcUUPdNZq32/)bNT53Xueu[B');
define('SECURE_AUTH_SALT', 'f8R.hUJjpA5jf`*t j|>+g+NlsTYjYo%@s%c6~u~<a_!s(u~=h0f7;)yOy3#*r;^');
define('LOGGED_IN_SALT',   '2F#x3p/.5xhLMGjL_3K}<>ZnJ~VBacVT]5LbD:!JoldFDBIvAA$uF{UBn7VD{(BR');
define('NONCE_SALT',       ';2A_Q*>@;W-]@K5#[0`]VYMAn0-nQ~eM4UHl<Hs>7YQL~=bK/j(N|l z%uxUz6ol');

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
