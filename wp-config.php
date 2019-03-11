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
define('AUTH_KEY',         '! )2_|?kB)Pc[2j5}s_BtHsWva/krbPjF#7]*kGs7e4KO+wvim,|.obrGjsIvuU@');
define('SECURE_AUTH_KEY',  ',k9Df,]D;$:;v*kp4mS-)<p/N%/1rz6bB?;ao`H2-IuF041~QxQCdXQH^4xS{cFX');
define('LOGGED_IN_KEY',    'm}.*1[-JAm~#ik2($8L7[2TMo8_>=4=(f}+sy.cKR9+sIpmo3Q7BwUJGuSpJ1!YB');
define('NONCE_KEY',        'jqN_.@5)RDDWvGNl[7,}2wN3H; 9<CfMX16)/spQ(o9Aw,m0<X{i_O-5>FCC0N$G');
define('AUTH_SALT',        'pKx~A285O<y.pTv&jBI)OKwFTd-E9S}>H4V2.4?7L$Sw.7s~[0|LWAQ1t_C6<g7t');
define('SECURE_AUTH_SALT', 'F^FT/*?tH6:!:MfB@aqAR]|n1m|G TwLe^^&A~HnzkNo^P}#veKX9n_j~fKm CLh');
define('LOGGED_IN_SALT',   'n{NICzt{D&G}cSI6:%^u*=q&?xr0U9iJ,C5]t2kdx-rv=&x~d+hYp]0~5./upvpV');
define('NONCE_SALT',       '`V!w4k5<AjTMz*C)U#GuE[%.o.E! &7^-11* uh6Er{J(jnHtwFB88!?uq:B;=E5');

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
