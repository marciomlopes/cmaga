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
define('DB_NAME', 'figasdmc_wp330');

/** MySQL database username */
define('DB_USER', 'figasdmc_wp330');

/** MySQL database password */
define('DB_PASSWORD', '0S(PWTo9[2');

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
define('AUTH_KEY',         'chd0wjc4kkqoftoboqx3r35n5excg5vql55dwoh3y5lpf7pyxz9dlwnisexxywcx');
define('SECURE_AUTH_KEY',  'bfeyf4qflyuwylqfxpztsfcqaea3pav6rkfprbnchecuoaoidnt2p7f01skn5lh6');
define('LOGGED_IN_KEY',    '7vbpiiqynamjhnt41lw9sjogdqwf8benf7swi8v2zwm278kqqqmcimxlfvm1agtg');
define('NONCE_KEY',        'huyf37uklczwudhwnq89uzfjlnpoyodymrja7rtqzvlzkwgivd86cim4uabzb5ur');
define('AUTH_SALT',        'svggbi5b1wn0auphykmfzi44ctwdequ5vkv7yt4ogi9sv0rx03b7atibsbybb4ae');
define('SECURE_AUTH_SALT', 'qz6dvqqlhdmzmaqwz4dng9zdatwgonu5xllemtvktuaez8f7jrj5egfd5i5o18xp');
define('LOGGED_IN_SALT',   'koaypyavl1e6va4rnocgz5aps5fspmz3oasvedrhc56sntrfgv6aw0ga1c89mkv2');
define('NONCE_SALT',       'ilb7vn2wiwhpc01zeakfeopek7wiqllpkkdpfkzugx4ptco9tgrm8igxyxei8k10');

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
