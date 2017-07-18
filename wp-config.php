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
define('AUTH_KEY',         '_^kt}cI7|<o(B{:ljMI+-W43+8<S([hW]<EW_DCBVS^1q41SPCKU10&eN4,9P{-p');
define('SECURE_AUTH_KEY',  'M>{#&;m)urgD)>:W,/Bh -^y]QRTH},*aeLHAEstDXKAq=)~GY@60yWI^:A{1>n(');
define('LOGGED_IN_KEY',    'MlQA|[l9m_BD}m!~GZy5s< s~nJJ;VY$qL*gdA:dGi%D+Z[$vDpciC{b5e)Z22<C');
define('NONCE_KEY',        'X#1,[oqE)v=6-m{_T9;DYu1&6d)ZO?Q,V|6h.sO1bT!KRDtGXWz5K=oX<ae&8^A[');
define('AUTH_SALT',        ' FWS?w.v_,b/J6w!r%ok<?|GZ5vHT[FKZ0|`&zLWdwAp@:xsV($nfKz];XoLNE*F');
define('SECURE_AUTH_SALT', '(80$@r^M|1`DC;~Kn=LcVU/Hmq-3T$?8S=2.6qGRfzy*}wuRH0bS=&sh&-9F@{io');
define('LOGGED_IN_SALT',   '@ul~[oztx;>5#X%%My$q`&7uA):X;.56f~ESJoBK%1(}l6n*fZ#2qq0/>/YoZtn>');
define('NONCE_SALT',       'l%OJkMlJc$lQB/?}[Yg28C<fVTq4tq5Yt`H^`D(^|x[-5UU`DR(>mMtv!y-_ q[+');

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
