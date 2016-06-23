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
define('DB_NAME', 'tnd');

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
define('AUTH_KEY',         '5 (.4=(%:3VMS?gw:fCncM,aET)MT9NbkY|w1YpHh=-2p[/fRovZ%^O4v4u,G #Q');
define('SECURE_AUTH_KEY',  '$#s_Ir[^ *#ZnH,aU~Tx-bW1vC{ t| Cm+X|1!iu;lFV!V]HKY1{c8%hVG?}M``[');
define('LOGGED_IN_KEY',    '8M++l|FS##)jEiTeowdayj~LtS|{=vlf8w<xuEVBE$P-Wv;n,,*saCo;{a]{,9R.');
define('NONCE_KEY',        '!fsDHJ~}0fj938?~6]Q*e5!r$0j9uUPW1=1I5*u5;=/%gB+DJ*CqkOqBBHc|4n]9');
define('AUTH_SALT',        'DM.ly380(zAAAQAm!4c|;H/W+#3?S4SDw09_w~!`:u9-;`izTohHaOX$p6.w 7(9');
define('SECURE_AUTH_SALT', 'VGXabS]vagv_b4=k#nli&66>cI}o ZJlHDBl0w_f/~fb&/2j%{Eo>q~_sx}<a%_V');
define('LOGGED_IN_SALT',   '1!6iRVoaxcfkjSXlPVd|+m3ZkAK9)pH#EcUfHNM,a;5II2}9#C!BUW4~E^NC/YPb');
define('NONCE_SALT',       '16B2IOE&&.JK.(#,<e81qakYi8&1{SUIB0Tb_u_g=9*L6>G}v}&DTIm/mh1W<bBF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tnd_';

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
