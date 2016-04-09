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
define('DB_NAME', 'invatacel');

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
define('AUTH_KEY',         'W2X5}|=4VZ~-t_sj[zlQwiYcu#WGh[L|)r)ykr0<+AyEb+T=U+}xbb}{D7}Rl&LD');
define('SECURE_AUTH_KEY',  '3Am@IO+r|D`ip%@:v~<D|4~LTn~pXmTw4+Q^s:R9CYuJC~g)f _%a^p!wWl+tQWu');
define('LOGGED_IN_KEY',    'Ql$t`@+*JejlicE<>)I&<..v?3_I(PnJ 0gQn#;fLb?@^CG)+-x_5sd=}m1?+we|');
define('NONCE_KEY',        'kD* /:<@G=@(P^F!Hw^8m- @2MaAhw0p-&4C?emjSyPI3jJZn-,R@4YE>m|rZw#e');
define('AUTH_SALT',        '$}/Bk9M+r+ uPwK,bx`KJ-XP.48f-;wy(4)H*-TC/c_}p[7|PG59H0kX~#;sL$M%');
define('SECURE_AUTH_SALT', '{L{@Fq2]8j{X5nI|B)!:{-%82#Im{|I0&sA)YX~fBvX79,=U*7mwz8-3>$cwGySQ');
define('LOGGED_IN_SALT',   'y~u+<Ybrx-2H-u+c|amG-G^i%q}i-l)Ux[AoWjq;w|Hw|;44ijV4SrnJ6G;L=3k~');
define('NONCE_SALT',       '-0$< V-bE<OC:,C8O7W:-|{)/JJvwOL_jw%fa)f>U)U-)0]MR|@QIHAX-ue:P#??');

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
