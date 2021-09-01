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
define( 'DB_NAME', 'docprep_db2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '4e-:O5z(N#6c.NkEVJn(Tuq#3F8Xu(oQRT_z.;h{`]EPva5CR(RL_!&Y|sQc54F1' );
define( 'SECURE_AUTH_KEY',  'RUEtxZ]z9{{+vI$=5xK>JspZwqV fJfd(GEj.gJx(IpMM??yy#JxAD)]Sn+r-:k%' );
define( 'LOGGED_IN_KEY',    '*ear(U`abE]0>dL[Q4rEhW{5FE<l{VXk|Q>c8YVOF{oTk3vE+szr(]9ax`eQy)|-' );
define( 'NONCE_KEY',        ' [e19v2{17a;j0+L|{w 7YAD$s< L; hI0~v-?ftGrkhl)|!mXjX&Si*zeZ?6x69' );
define( 'AUTH_SALT',        'v}9|=_Ok]X&EAe[4crKqZ6W^B&8vnh$$40B@t7HO++grR$wU-j.-de@4CIi>Pt^)' );
define( 'SECURE_AUTH_SALT', 'lo8(-w;-f]w|tmo*t_]L]^cx^zW(AW sNd[<Kr`YpDzx`n-YN6GR1B&CjiWwU,yX' );
define( 'LOGGED_IN_SALT',   'zCh_Dr[ac]Y4`Y?95uXJy2LL6bc2sjW<c#P@mU|v$:V^${;[>,$,y<L2==>kX|ut' );
define( 'NONCE_SALT',       'kW[|0zu^h1!6uE:{Cxhtz5L390[2n]})bNMe91~UGsW@_%dt?1cl2p4_@/[=;Z7n' );

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

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
/** Sets up 'direct' method for wordpress, auto update without ftp */
define('FS_METHOD','direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
