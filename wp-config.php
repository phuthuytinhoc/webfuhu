<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
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
define('AUTH_KEY',         'X<L<t>3qAxh$`+vH-TnZc,v%Fd|.H)J7g/F?+r4SLzk|EnY6ob8mEdB;UsjmASAz');
define('SECURE_AUTH_KEY',  '*Vm&1(}jkV)2~zc-iZXQ`Cv:dra;2:q=?9@ZwHu,.Bo NZJs|,0TDR53?&XPJ4=j');
define('LOGGED_IN_KEY',    '6W@:+?a,cSPkr)j8aX+OE|/`t:A=|Yq!f^!I`r`ti+wX|.lA`1$[3>)F5q(OSuH?');
define('NONCE_KEY',        'Ig6J$_&{s442|[0-VWS*>`GsJ/:F|$.hE,)RQ`:>oGlIV42#b(iXVTI)I8%*Arut');
define('AUTH_SALT',        '8t|m_f{,5ahd3+h*db%1VW.^9l3S0tv++&M@va9-_:zTqFu[IzEna*/S(#D6%e/F');
define('SECURE_AUTH_SALT', '$YB-Cb+{oCAJ,7V_5U?<(9^U5P}Cb]IM!*;}@*tYffQa?#Jc|?k$2cbvH?zY]c6w');
define('LOGGED_IN_SALT',   '<${vB6?va[g_,PF{oufbt?_i@7X20OrpUr|4NnFYJ#&Wze_5k`;wVEV1-F$^j|+a');
define('NONCE_SALT',       'we|q04Xhg-+_UL0 e&Rj9|v._39cf(nqh++e(]`~+C>6Kl?$T<,?PG;Ct=)gOBbs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
