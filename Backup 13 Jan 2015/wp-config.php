<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db1286261_sa70260_main');

/** MySQL database username */
define('DB_USER', 'u1286261_sa70260');

/** MySQL database password */
define('DB_PASSWORD', '4Dusw8NNg99qGWFU');

/** MySQL hostname */
define('DB_HOST', '172.16.5.224:');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(%A78!nJ^mYY0oe^EeFGpI4BLKUZjuGkC8@m1mkdjHKDSWk^gy%V3B6t03fd#xbc');
define('SECURE_AUTH_KEY',  'cXax@M4MM63d2cnZon6yZ&mSy%YpoOLTOvd7jb)2Z*ZOBY4JM(JQn88io7u0^yA)');
define('LOGGED_IN_KEY',    'xAbcDzE(#I(DVWzI%%Bl@rmgysyTrz8aLRx(zATT12ERfVMo8tjO7MjvyLySc!Cs');
define('NONCE_KEY',        'WWCQ#cBSOsuyQ&eUyCrWoPde0@4hNczxX2cuBxN#!0GcPqUw!7@Sxhvc&qo3^VCK');
define('AUTH_SALT',        '0ABb#pxSES5l4u(QD^#ft5u2QRnZ@Mu*A4fKYazFtU$)*fXB@ar^3USF(ZV$P^Oa');
define('SECURE_AUTH_SALT', 'qJrih&MgEDzqk6ZtUD%#)XHC^loVE#481!U)&eqaa0dq$JjV&C!ofexRLAG2VC#4');
define('LOGGED_IN_SALT',   'p(5TczsV$0TytBlBr633iAJ*8lF&VsIVT1$q!uoRdZ%V*5u&CKzMz6lLVqxzX8DT');
define('NONCE_SALT',       'gyU9xBz&Sl4UPl@*fErpo1&W6w5Y*zzes@c5R5Qy0V66mj@5AQYpaF9$cNBWTFIy');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_US');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );



?>
