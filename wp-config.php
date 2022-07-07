<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'todaysfourth' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'yI2$f04o`Fg!w_j>[?mZkYX/?=a,_T#8Ot#lfme}wsAOFfg{]jjywE-n9d6CUe;x' );
define( 'SECURE_AUTH_KEY',  'k:yy{Z!wuF+K]]jfyVUNLQ/%.j2W^bK~Ip8q@$N}+lz=UkB&)g##uj`LQkC&1$I.' );
define( 'LOGGED_IN_KEY',    'eaOTT.B~&h>J5Z)Q)3WKQc+,qjuz8{[0,Jj.b 2M&`rY:05yrQy#@]BTd>144VTn' );
define( 'NONCE_KEY',        ']]xH~sZ/|3;=j+&b61BhNwx~r{XcJ=!ZO1E.s7~39`:sP<c>s(c^DP>K1l $O&cn' );
define( 'AUTH_SALT',        '$+EsTWBRC6MsY2:r+%K%tn/&%(^mNRF?D_~&a?{},R?SHZu[A.Zb^<2W}OP]p.1@' );
define( 'SECURE_AUTH_SALT', '8?N{q1k:Pm6x$a{Cl4EN:*O#NQRbKN|:BY3gDE&.ShXJ3q|pKH6}sJ!%zOFG$2EC' );
define( 'LOGGED_IN_SALT',   'O]Ut1(SL} ?DRY/?;RZZc]/w3`P 1kIfqZI?^pv]8j]gMeF9e9d?D,1cZu2L?U%w' );
define( 'NONCE_SALT',       '+Ja0sQ!_t9BO.a!R 2hm@,I?Lut/r_y0ZNWR7Avzi!|x 23-Y_cFe~rP$:%8#./~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
