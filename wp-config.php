<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'clientdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Sd}IjR}xYz5I]-v0+<@]frLI-d#H?I */|7(T8BLqUFyir^r>tjp-!{$s-+BInUe');
define('SECURE_AUTH_KEY',  'm.>#Q@MdV,Vd(`ZbYrW*&owu>_YT#p8g*e+ZpkZ3+wAF{>$(O#Jj1+e]p/KJR:|3');
define('LOGGED_IN_KEY',    '$Y6jf++kBJ5D2Liu9rICj+IwgO0ibL`BqHP0[*_:zC-1;|iO@$PM{R6XmCA2Y[sO');
define('NONCE_KEY',        '`~bnKh%NSQ iMyA4^|?-u:K`fCm(<X$@v_g ~::@J+oZEE,WU-s#PJ/Wf;MCoWF6');
define('AUTH_SALT',        'o4CR_8fROGp|ZG1300<he18r9/*nH}6Hi%+2B0a);AG+wYR{!h+>5xD1e5w%0+J}');
define('SECURE_AUTH_SALT', 'zhv>R nGq:!P9y<f~:pVrI*3}LWb j(JLNgk~FwI]_m{<|lzSeDUc#NjTus>fdsx');
define('LOGGED_IN_SALT',   'p_z3YG/%_oH76u%dY3+i;.+iLTE|%1<@C;G?2wLk({P3alX[<18ucYbo6e(N:[U@');
define('NONCE_SALT',       'u`z,h(4WhzQne7+/QS=0}t?wDFVm$jN=0/-!cF+oy8OS]/=Dm++o#6|FhP=q7(MT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
