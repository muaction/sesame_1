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
define('DB_NAME', 'thanh');

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
define('AUTH_KEY',         '4i_y5U*8+V5zY[8qwBmnIeg8d by,gZmgAZ&xy<!yEZ5*/E]B7? }}RhRm)B,$W(');
define('SECURE_AUTH_KEY',  'IfTai-p*Ip GSY%+`cp6~[bO}+EEJug<hVL$L1VK7dUKT,q2XF3iES4wUAqSkN)/');
define('LOGGED_IN_KEY',    'U)`0K>Xp4dk@]8!EjZ|Tz<KNZt~IL:d35oWKV<^@yG1`/due]~/[Rd1`Mx0ezVnk');
define('NONCE_KEY',        '{`xnn<s&Qd<TM]Clc k}~,hhN^aq=xSu=[>VFi4c,<E-QP.A_9<;CvZOVpP|ji3k');
define('AUTH_SALT',        'h_)I540JW6cKUN[sQ{:<*eM11gtG854qns@SMmU.QXCR/zs;go2yxG)Gg30{aQd*');
define('SECURE_AUTH_SALT', '-<)WXezr1~m9c6-9`U{Ea4uG~1k}sh7OEc<a1b]_!>_~$fH<jyS)x|lxh/,;kW8&');
define('LOGGED_IN_SALT',   'Cjjdu~GO`0IPt0j/Q>cG`/`m5#BadPM>8+|+lh*M04BS~tfW{xIpy9@,8 MZPn69');
define('NONCE_SALT',       '9Cw5}xqCj`b)oWf^;LX26oF7jt?A^j{k{Z) <h )E&b26ihCt[:SG-+r%E;b`6|h');

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

update_option('siteurl','http://sesame.dev/wp');
update_option('home','http://sesame.dev/blog');
