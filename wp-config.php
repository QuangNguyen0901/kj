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
define('DB_NAME', 'kj');

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
define('AUTH_KEY',         '#DzKv$8{K#%)]]%U*3h,Hn~i29Y`+8[.ptaOVokJ:J.)MZ]V1k4DG/w}cve6E}i{');
define('SECURE_AUTH_KEY',  'fiYQTZ?g|47[o[K0|u3MQ.ToQ&x!3]A#CTq6at:7B}NKEP&PX[Cf(V}e7T!}~uTb');
define('LOGGED_IN_KEY',    '.qA2U`N<k(_08G7XX7frzy<&p4ug?!>HE$.I`.$=>0q%C|&d#*$W`l%HalD].G-0');
define('NONCE_KEY',        '[Dvl%OmBt|/K0z^ Rv.tI[IY#riI! +:1~ebGrh&)XCIiH:&3(0gNbe5)1f.%N_P');
define('AUTH_SALT',        'HLO&?bAmI:Bp(;MzCX9z5JZZ4Fa+N6WH.Us{/20yw>Lz ~AgdhbJ#zx4CqN~<,!T');
define('SECURE_AUTH_SALT', '8B9O_dp^)Kw$vZS(h@k2a8Gmzw])$PsF,H`exlvd6wY&b4zo>%w0?~R=uf4}4S9f');
define('LOGGED_IN_SALT',   '%A?)])3qskN4L0bcM+<bB-n|Z)1F9XY@pJhY/%}msAg^zj!A@rznW%)VfE>D^z{.');
define('NONCE_SALT',       '2<!7mQk=:gqhVh-|HK}51<%e22ebl5,4b:TZ~gFR@b+;j<ujerp,m;0 ,*u90:X|');

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
