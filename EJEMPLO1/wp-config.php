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
define('DB_NAME', 'wordpress_plugin');

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
define('AUTH_KEY',         'RioEqCTBU+9ellf.KLz%I/xd[?F!0rIb95xRRc]TFM,_9)@Mu)f8V,tFUta1hb8[');
define('SECURE_AUTH_KEY',  'Xq{x`}//+moaV%C3zty^ n8Ma~qyHuf2yDN~)c(R{>pJ*oSvUpwZzomPc9CPqV-~');
define('LOGGED_IN_KEY',    '9I;}>6C{_)K}-_7cxI@V*PlyzE!O%(k^;3;)@LRml}c)`>)n#JPm_`$6&hOOoqbd');
define('NONCE_KEY',        '9*o;(#xt{Ft0RZ*[4PG.bbR/8#NE=]E(Z~V4=`)vvpi`eRWY4wd7D$*zp1Gp9wBG');
define('AUTH_SALT',        ',;w@Ofqp(]oKwusks}UEK!C> Nk|Fo0E>^/;:qWm0v/KC@J#Q*?KhZ&0%.]jPRio');
define('SECURE_AUTH_SALT', '%0+MjMJ{q@rQw$:D/OX~o;Yb%q$#|[CSSn$PIz%>@B9cBMzVO{xe[i(&@D{}}Jta');
define('LOGGED_IN_SALT',   'MK^s(DPd;-6D<}UOShp6T4Jb-ID0Dbd9@<~Y#RE2m6:-4 ^lcA*QHbarw=LW_O_X');
define('NONCE_SALT',       ' e-)mgjI?qxDm-o1k$a^a]d0Rl*q2f8:6(!/D9SqYV6acfYso7_M>qkTOTXvspGt');

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
