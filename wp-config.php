<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'starizo_db');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME', 'http://localhost:8888/starizo/');
define('WP_SITEURL', 'http://localhost:8888/starizo/');
/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'ar4fUF.p`<0/|MmKP~ob!Vz;XaFVT)/844|_ek{0D1j3n%4lLK,ruF$-nuAI0=TA');
define('SECURE_AUTH_KEY', '1VY2(l-Wa4fUjiz.z5.1jsl4Q|ezb>ubbF#((55p@FpW_jS_{)@t+W6CVj6d,8k&');
define('LOGGED_IN_KEY', 'SlF+(l-da* lQn_WjT0jB26$?jA5+Ek, %f8vM:wDY%gi{TYh.w@*R#%d!g>_FZ&');
define('NONCE_KEY', 'N.VZ1!];Pdi|E0Mr!zh`h.^Ti}DP}u|>l5mBKucPt(befE6rnsRA9r7W_jQa*O#/');
define('AUTH_SALT', '7,zzGk>ex=3bI3uZgcMH.)n.R/?Ps$xdm7MW<rg;Do}4hwc=s*> r1VFW)7[ZacK');
define('SECURE_AUTH_SALT', ';vWKo1Ig1>]~uWD^L*(v@gUj)?F f`Bgnh9Ok27FWWvd&`h/.FSH+L@ B7ZNfDE:');
define('LOGGED_IN_SALT', 'BlpckEjipqw,pEPr;c/[k[&d2.?ShP/;#w=_8z~p%.g[G(:e3|OXa]-Z8i7Bwe2l');
define('NONCE_SALT', 'q`#>}hn hP AC!%|4-1eK>LkQB|p=[C;:o2eHIHQY]>MV9ya)(Ri:5w~*aU/t[oV');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'sd_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
