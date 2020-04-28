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
define('DB_USER', 'user1');

/** MySQL database password */
define('DB_PASSWORD', 'fullsail1');

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
define('AUTH_KEY',         'y(*+!Yu!+lP%Tm7s4+&@RI^16,ect%q+@26X`5;o|!O{6:@X,&7-6v>)z3rOZ_s{');
define('SECURE_AUTH_KEY',  'lspQe}+amMh0UC{zm^kS[*44zu-MXtcJaZ3-;M3Bj.:cnBfXBCv,4/{>lt2XZ ^{');
define('LOGGED_IN_KEY',    'j-o]-BAH6~rT(q]dtdD|R1c9|W-Gk)cM))0UkDS4)j4-!MbC#|J~MX:3~t=&-_ib');
define('NONCE_KEY',        'g%R*!n+m_!YE5Ox4+[f|m(C`Yr81(QZPbHlWXkJEHL:$0=#r/w7^-uvfO/qf,8?6');
define('AUTH_SALT',        'K~q-FQXigdiW4b^z~YvY&/wn6NzTi,bk18ieMQB>NOc9Y`^R/p`.JzSU3-bU}hxm');
define('SECURE_AUTH_SALT', 'FiXH8^Y-zj{.wlB9|fdK;Pt,[pJ>r3o;2qT0MWW7 W&sRo~&^^xMy.A79c 2kb-Y');
define('LOGGED_IN_SALT',   'X~7AAmn(k$&esF|.dDZq7=|CfS|fia=NJsWkDn*t|X#m)}>vpj,MG._@V02NaL2>');
define('NONCE_SALT',       '&!nqw-KmmEhykhajH+zjAFjFu[}+-@/^i7aPw}6<}#5 Tc!=*B.RIN|RLLO-zaQa');

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
