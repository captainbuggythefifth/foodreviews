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
define('DB_NAME', 'foodreviews');

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
define('AUTH_KEY',         '@OfzilOW#oEqsWT/!E0ZFB2v(E0v&)[TfZ]:1]mz(mM3ucn38@f%XX8PB=#w7JTk');
define('SECURE_AUTH_KEY',  'TFa=NtAIt%kRH}l1-Yi;}>p7l8X2KJ@lPG.s~+.`)Hy4}#ksNMvK+6EzXOMl4^U-');
define('LOGGED_IN_KEY',    'J)h(;{YU=}z219cdrg=F)7EU8YfamYEW=fYA$y* aM_,dI<>7k| 8>k[gYNm?1I(');
define('NONCE_KEY',        'OV-J3g*dD`50,@FG[O:n_!Pn=+?}cpfWJ1u2XrFrw :5I[/TCu.|AjmUr~FzkafM');
define('AUTH_SALT',        '#XsbL6INr6N1W09lG;nZt)M-E96MLEy=th&v)W!S71!<:f{JKxR#d<|lMHv#O~)E');
define('SECURE_AUTH_SALT', 'cDtxp+eUGTLxo(O<O~a~X#Hdl+Ca@b%Y[8:c=vQG@SoyTnU(1mT1 L|oUW5~d0B#');
define('LOGGED_IN_SALT',   'T!I>N!* |;bI@AtXJI1Zo;JP_L[mwQ/#XnYhD+;97(&O}H/UX^q4*{t8U8-xp6>p');
define('NONCE_SALT',       '6-?Lp35aiYG!}x+,Pe9dYMC3ON^?fb/ks6M5;xTi<CBKMZmuBr691[8`?elkUdz%');

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
