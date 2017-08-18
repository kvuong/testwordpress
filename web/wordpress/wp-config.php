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
define('DB_USER', 'dev');

/** MySQL database password */
define('DB_PASSWORD', 'dev');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         '3KQGym(@n~Ac{ FZfm-k;jx$y-t*RoTsrQ43 }!9lp-b>X4g@j<LHW498nKwj$0i');
define('SECURE_AUTH_KEY',  'S:uu4G16?Lv~Yzy(Y.V]G}#WIPTT{Y37]^S}bssrbURkQJ!7uWxt9rHKL<9mSr&u');
define('LOGGED_IN_KEY',    'wa6WQ(uS$8N{m-Q4DT>9u!76>{vpV)C{)HZCM<GbJ=9IY+!GqN-EPAtJlW(0qJ3.');
define('NONCE_KEY',        '+}#u%HOG6QRo)-t%#^=1k,/Ek:Zy$JhRfe@#4cbqIn(ds{??KvRCnVWC0#T `Gh5');
define('AUTH_SALT',        '*GrrLS+=L2P%uU6*W+CE-(>SO-uCMeR_C&R4MH.*:L[c-v;{N+:jR1UeU+$DN(>`');
define('SECURE_AUTH_SALT', 'Gz2<^R;kGVC;U!,|^Yp%|uMV;i_V*m:[/57T0SJemK$vg~:1rQGOd8gI%>w7u@sD');
define('LOGGED_IN_SALT',   ';DmPu@2koM`-y{Uvx$tzNO8qkJc%OAFS==TtC)]0]q|C>]jq4(KL#DqU{;@sx2sM');
define('NONCE_SALT',       'Ckriyy*B5?;yq0ixnV%&-[ICevZa2;@y*Fr2WiF7)/B@1ucI:htg-eEJ]2~Aw4#=');

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
