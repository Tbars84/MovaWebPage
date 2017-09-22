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
define('DB_NAME', 'bd_mova');

/** MySQL database username */
define('DB_USER', 'mova_user_db');

/** MySQL database password */
define('DB_PASSWORD', 'mova_user_db');

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
define('AUTH_KEY',         'jfhAE8-L1p3GqFd9@GPe{5qyU<xj(tB%@x7r!rmEqz#<5sb6$WrK=(BZe68rr9,T');
define('SECURE_AUTH_KEY',  'RoP-.=B9U #k<o}C|#uE=S82lzFQqHzPI5[w93UTVt!<.p{}8;|{p[]O,uQSlMI(');
define('LOGGED_IN_KEY',    '}:u+C0ivC2@kZ@pd9hB.saSI2u-Uu$je_R>[YKV<Zzre>V6(D.Gy_~5,Q%hskAz&');
define('NONCE_KEY',        'TQBtQ9Co$#@7pCluE1a?+dUI:-X}Xd76FEg`&Dn=9OgRNLFpI=}R3(2cxptcX`&3');
define('AUTH_SALT',        'uRT]-;QRW[w=_JJN.=Fdnd#41,IkU<9vXSZps%nI?tY!%>M.Zm6JS3eLfpjDG75B');
define('SECURE_AUTH_SALT', 'Gy|UIl_^YAY^bXH-:(`Ia]@7IA428{@{sd9t|O<Apb?_R ILp9f-03uxD[S]ntG>');
define('LOGGED_IN_SALT',   '0ZQ>u#(E^4%H7(I9*5;_v@Reag=nCU>IhWmXiRv>2+@SBZ`$tg{qxmZh<EHxH#%P');
define('NONCE_SALT',       'yW#:j)G[<+;/[bJ*  ![=ArkDsn- QV},=GRwjR,CQ``[ &?_$ji4Dn4RTbUVT:b');
define( 'WPCF7_AUTOP', false );
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mv_';

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
