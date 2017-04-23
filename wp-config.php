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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ' Rc8}g8VU`^i6Cj-bhlU+XL|V*U*I#UxwYWXJu5FoHsM=<H#t&K{4G4AHD0;pJY#');
define('SECURE_AUTH_KEY',  '|ePd^utv9::FnRoyo`:yEwjh^zpat7u%bf!w^u--NS[%Y$W?R3!1j<;q!mHNCux{');
define('LOGGED_IN_KEY',    's%zcufq5sZ_fl,gXuyFmgQn(tZ,}^Jh+$TAT|cmeIe6fC+;hQA)8b*}6`kXkfLhk');
define('NONCE_KEY',        'wq^]+PV;N?Lriqw^Q:3IE&G%M/FfA]A;<dYo~*.s i^vW0y:aVRm{>n+]tXxBv7E');
define('AUTH_SALT',        'gWiXJ l4<>] 6XjOyU42;3i@LW9XlCFC=B?adhD?iUzqT1q84S}V%t.+Pg0~_^A ');
define('SECURE_AUTH_SALT', ']XJZF}[7.N2sF*_gFh?nAidkJV!?`$XjFx&K{Es@|(7HS?S)vh5|SjDQ`o`= i=!');
define('LOGGED_IN_SALT',   ';DRZ6;RX`M6A7[r4Eg*Bb80U331Wvto&bx=D:WP<p`72<,R2d8#wh,?{#7w&W0rW');
define('NONCE_SALT',       '8v#*(lbFnxN G7c0-<Oq?(3/0_uizN5~B8v#|h!SM_C22LGMrNCCZF+Qyek7~-Y0');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
