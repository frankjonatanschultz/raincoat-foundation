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
define('DB_NAME', 'wp_raincoat');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'dbQT1Jbt#^rr!^y*TbOr9d_9CG%z]KF 0<<rF~96,8^:s3(UZ+3XgOFS-,o>3i<h');
define('SECURE_AUTH_KEY',  'AZ4q=cL6C!+<4bPAxW[Nn#u~W`jLYnJr)}v>}a!LMNdubOOD487qE3hx{*>Px=z*');
define('LOGGED_IN_KEY',    '|`+7>|Z|O<jg<iasEX&Us[!u^z-A&^z|j}m;+x*~z|[l~UE}7gt8wgz|xA$TN|cz');
define('NONCE_KEY',        'ryC!`9d}gt^Rilc=q@4k_4*$8P$3_w#dzpiBw2~:iF_&HJ*6:}MsQjnHYjlt}*>=');
define('AUTH_SALT',        'y_lXgh4]d!|Z+?$3vO,>bWXn6Pd#$8,/k0-N~C,WgSC8k$Fq/&iMB^=FZ;npJb)J');
define('SECURE_AUTH_SALT', '+7d0r-BSc:-5oQ>_+HHjW!9<j7WJ9$5KlC)+c-*Y2J!hk;!((R$Q6LCWL;+-g0^7');
define('LOGGED_IN_SALT',   'f{BzWZ^|,h;6Gw-h4gi_#Te,nvC}QAaNTCUk*`xXlUR=-H9P.%g1+t(KzYs~@C@B');
define('NONCE_SALT',       '.=,6EM5(RPfS<&V44S%0WM}pTv[?R%KFkg0r*X{ew!#uw9.b,+Xs.j[ +4D0IYRx');

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
