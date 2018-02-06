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
define('DB_NAME', 'workforc_wordpress');

/** MySQL database username */
define('DB_USER', 'workforc_root');

/** MySQL database password */
define('DB_PASSWORD', '[ae3T9jTeKa~');

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
define('AUTH_KEY',         '4T;gT]f9g=ua#%=0u2HA5y1gEKp$T~,]oXiV.Mngy]8-).:t-lM:|@P;we/jD9-c');
define('SECURE_AUTH_KEY',  'digQypkwLn-py ~TrQv>;To`+SSQ<[n[1+JmROVN>cprPsE/I$|nm3250j,Q&!e*');
define('LOGGED_IN_KEY',    'B/^./kZi&snii.7Ddk_(y2%>ZjNKuuifO#_-l)tR}rECm!<tShD5CNs+D)GZaJyM');
define('NONCE_KEY',        'WuEdE*  PAZAcmD}Rj#|J1i-7TuJHIs.un;B& O3r~j :n/jpp2xo9Q,@+@!AS9$');
define('AUTH_SALT',        'uIUdG~p+@AD-mm;!9+ps@HhXZ+e%>pJT!.mfvAgOcG$@t2P5&LdJnCn2{i2Q1;.K');
define('SECURE_AUTH_SALT', '+J?1E]LmMB_T@fCzPsY~ ZP#U,3`Cs.L2XOn(GfiwlkVXUYIHjVv^EJJ7)XeX.[[');
define('LOGGED_IN_SALT',   'TtfuB-G_ (~KTHJFJq^|2^h{;CPtGc@&(8~!0|e^&iXn,J%k#*$oc}crD-) XvAL');
define('NONCE_SALT',       'f[ySo.`#0DsgEh7(cUxjA:jF=#R6bx0&)E W]1vI@KsK,L=[9}]#[9_9fPY<OI0&');

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
