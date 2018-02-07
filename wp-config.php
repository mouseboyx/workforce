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
define('DB_USER', 'workforc_root2');

/** MySQL database password */
define('DB_PASSWORD', 'Aq!F+4yrV(@#');

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
define('AUTH_KEY',         'lZH5G0@yJ$BQDkoD_%O;+1c;T%e))]R#Zadhy55Uz_Q@:Qvl?~:*Z}C)Qeq?{*NE');
define('SECURE_AUTH_KEY',  '`#72*X{$/mo4j=U~`6L$LZh{(j`18_:f9[iDs,J1*0n#:E4v>DdRJnc:;:YqfScK');
define('LOGGED_IN_KEY',    '5:qcjEd.WDqNT[Ot2nS3Cjxu?_XwlVVBpYDM[a+|+P6&JzIfUhT.:Z){|<|PSJ6~');
define('NONCE_KEY',        '%m.QdnR6oA=34 r0IuN$k:m8x[M1_1CViEdwAuY>?k(h>HpjW2I {!5eQXe[+Oin');
define('AUTH_SALT',        '~@}~PV{w7l%==f>Bq=];b/h.22LA=yfK%?})^`#c>~gz6kui-GU@Os)!~ G-#4Tw');
define('SECURE_AUTH_SALT', 'hJ/ebo]+s(LK@yvg$O~A#C7}wFpYZ +|w3!Td|xR[No@Zds4/iI-IC9L!LK7Scz1');
define('LOGGED_IN_SALT',   'k.ZA0u~Di7%V.QnnnpD1#8d0Gtdu0eUt^JR<r/RcQW1enCo:t B|2m>I3(_!Uj/p');
define('NONCE_SALT',       'zb(xV7Rbpi4rTZ`Shw9W~cY@vds^/o,z)o$NvX%<6liF%?v_!fBl#H0f3zvaE|W)');

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
