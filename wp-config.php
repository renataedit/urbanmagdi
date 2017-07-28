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
define('DB_NAME', 'urbanmagdi');

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
define('AUTH_KEY',         'S+ENeu8hl~vRl~e^A&~k!=FZ`g*;3-LY!s-|iK9YF+/0}|~.*~`3S)/s!-P!2o,8');
define('SECURE_AUTH_KEY',  'HT0-MPby-=|C#~|~~HN+-@+m>a+JE,1zY>=[YDC&_61c.Eo6QlC7qn;Bo8(_[w#1');
define('LOGGED_IN_KEY',    '1+M!(~M: Dg&g@rA4PX ZOUw_d%)qdo@d@+o5;H_VEd7PmRL<^jj|H#r%J++SOat');
define('NONCE_KEY',        'MsW{1{2wN<)Snqa]D2/ELg$+Mx.69|}WQ<#?Z,+$#MJfJ: 0ram#;|+Vl177Qi+F');
define('AUTH_SALT',        'q|}^+x}3EU|i+B=,B;:X=Z!1,maICQ}Jht+74BuD+_x7lYQ%A%d>~*Q_pp4f|W[z');
define('SECURE_AUTH_SALT', '1Dr2mLA4Z%bBR#cOZ7S}+}+@x+*_{0tVxo4EYfP+;#Pn38MM6L3H-_nS>y&S?Tc;');
define('LOGGED_IN_SALT',   'lln%NC.g-BGgQXMXue)S;5gN]=:nzDRz400YJ-8u1B8XlWA4Id|2-)7E#{T;kU29');
define('NONCE_SALT',       '+|44~Ze@-OHe91,7]ok@_5e-.vqMqeOOe~9E|tX[:$`>d.O=*ykzQxNVuxPaUoDm');

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
