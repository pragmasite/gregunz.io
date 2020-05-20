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
define('DB_NAME', 'greggazs_gregunz_io');

/** MySQL database username */
define('DB_USER', 'greggazs_gregunz_io');

/** MySQL database password */
define('DB_PASSWORD', 'sdwmJ7npAgYZ9XV5DN');

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
define('AUTH_KEY',         'KZ8*[I$&h$>[4PT!c>0n$F_464|9us<}$xQNlpS9W%U~Z>c;`}:tJB)!a^O/8p@i');
define('SECURE_AUTH_KEY',  '?5;cuj1[XmtTW/<9m72|& Mx?MEe.WyvAYs$pG[er>Z/FqHW7)t4-{(tdxk+>Wr6');
define('LOGGED_IN_KEY',    'yy isLz2jG0+wO%bh;YiY6|QdRb[Yb U&?S)(/F]{O#H F4OP%z]b#!01A2(nOJT');
define('NONCE_KEY',        '- xG7e;#dT@m_A u-=p<[#M_{7iI.W^=hb@ zl2:|a,/x*EE Ef7g.`s`[#rDsxM');
define('AUTH_SALT',        '.I3dVD4N`;;1*rY+VQ;@ro:^4EbKjF8QzP`?<vS#PX]<K)h-+{!|Ijl.^^=&~,33');
define('SECURE_AUTH_SALT', '2j,Nzw+n51Es?i6JKTcJk[5`FPC*1`0^,/E&&ot6@1[P2be@ZsIh&,i@ub+ely,-');
define('LOGGED_IN_SALT',   'YkS87V;X_)l$W^1/,Ty(Y[q(7d[9udCXsf>Jd,PxY*>^5z&$h$kn^|@xo!R,t/^S');
define('NONCE_SALT',       'Ufc0vmR!m_G^ARo${^}a,jMi(sxjf#E_k`#cuNaa?6XCk@1S#,!x?;EH-Q2*QF|~');

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
