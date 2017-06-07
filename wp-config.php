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
define('AUTH_KEY',         'qIv@G& L3p-NIZ:v[j$TUi)IvpRIbqcW64<4TzAM!{9SUD;LVpgaOD((nWRsdy57');
define('SECURE_AUTH_KEY',  '4^0dfY>R]E>R_3>$mx97PCS!vQ@sEDIYbwG!7?{^VV3{[|ny(M.rJ,6B-J>zd+wM');
define('LOGGED_IN_KEY',    '}2{E7nLDr2.b]mo~V;X6l}9;`QKH#C^IHMRYx-Z N);;3gpb2KbnXO09W%`U:6$D');
define('NONCE_KEY',        '4-QL>@Qd[&opS$v1i<5A*s<ZR+8>)b]+wLeK)-9I#>|hov)jmp#`{HnOMBX$BfOM');
define('AUTH_SALT',        '..X(xA/Ek)Boj#q=/@02Q1oLQ|j|vEWVzpW-H99}ks$=L/gBmpt *D${<QplPFH9');
define('SECURE_AUTH_SALT', 'zKC.Su^h{m4Y#Behu/iE5DQ=byq-pO&eIR,b#Nn/d 9FFg.lW-vS,ngX 8+XNoi9');
define('LOGGED_IN_SALT',   ':1-Lr:}`_EN/<?H$$@D~S}a]qXEULb k>hBHm6+PVhB0Iz_L){XIOr;Mf^pyTY&;');
define('NONCE_SALT',       'Y/&?Qe=Kwp[#r6]4F G]!vG;3mEhzAXVj7@ft.Dab_xXpDjH,3.FTR}B^/KQuLV|');

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
