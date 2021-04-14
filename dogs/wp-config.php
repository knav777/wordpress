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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dogs' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GFb(e~Y gWwfv5.Q8*{559!N#-x8:h`A*c^3f|k57h;_;Bm(-]yfiU^yq-}]V>V>');
define('SECURE_AUTH_KEY',  'JUg`J3kqH`b(=oDjJ~K.v,,h^|3PIS=K-$+r!4<f_Ig16I+#v0DQ+fu,LT-JjtD{');
define('LOGGED_IN_KEY',    'B97S(#*N~bh7B!%+9HDgaPi8.HJ#EM5^< XTc29`.Uz3TTb5YZ-o[~p2nO,^ tqi');
define('NONCE_KEY',        '-}}1+gJP?t=P=7Wc`+aj<Df$V,]]yvcsQ7nX@_TPJ,7-&Fh`CNzlX7>vS=g|pG+>');
define('AUTH_SALT',        'V/hQ:GU`v$yh*Ss;[,B 31I_m3()!W-8)5nF](tL-`-23KJdYakg:o$g*2Jf3aj+');
define('SECURE_AUTH_SALT', 'so/6Ufn|)Io7zPP/ZZx2E<NP,i}<UBp0A<^ g/z;P.4(We@1vr^-E8U|OLf;FCHJ');
define('LOGGED_IN_SALT',   '7S*}_t4kpG<VU;dMiSV*|9`{6COz(kEi+W( hySF(T0u-uC]+KFe{p50^TS?KkZ|');
define('NONCE_SALT',       'WDs0C^?@``4i=P8WZpmR>H65$|]>m$|f3;fRC4*hr{:fE]s44f27!rnwvG)*?UDk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'knav777_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
