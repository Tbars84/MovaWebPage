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
define('DB_NAME', 'heroku_ec2245faade012f');

/** MySQL database username */
define('DB_USER', 'b1bb073d73db26');

/** MySQL database password */
define('DB_PASSWORD', 'af6b0788');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-iron-east-05.cleardb.net');

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
define('AUTH_KEY',         '+G<_U.6PdU#q4^ol2K7kzQ}-DekRgc6-}{4pX^DN;-J(%YKX|*3Dr vnBvX|}E+|');
define('SECURE_AUTH_KEY',  '~{N MZhnA7;@TR97&(;Jc5FegiID7;@aVEVCUMpVfvesYhk/`#[)BdL/T[|wA%mi');
define('LOGGED_IN_KEY',    '=xF=qf|![0)jN8F{/lNrQ`R[z|qc|iF3WmJC+kL8,|K2tXHnmF!RH#Dc9 7qK)N:');
define('NONCE_KEY',        '5V2U,Sa+|he%SPG5xTxDAYqslbXp/qkaRcd3C-?N+0*!8=E#]O7O-+vx|&a-mD)k');
define('AUTH_SALT',        '/hON8rcLl97M$^iVNqvtkSi,04V]GUw|y<g<2 P}7Jee)z@=.HafVLmusJ5cxbdg');
define('SECURE_AUTH_SALT', 'X>7^gV|&`.)[Z%uaTNKe=uk:l5]0w5XY8ps;gi~n[ytqvL]!-*w9%WyasgwxmhW!');
define('LOGGED_IN_SALT',   'Z(JP,~`S4&3Sk0B1x4}(8GoJ,C9?3H{[gh^} XG9}_42{:(~Qg+mj[xF9[1pi*O.');
define('NONCE_SALT',       'm-2aZ1?8rqA7uL`80)I*f)Qxs<a;/KF{=ws[go3`IgMxi??3i7JP^Ax#o5*%#}C ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_mova';

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
