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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_shop' );

/** Database username */
define( 'DB_USER', 'wordpressuser_cushla' );

/** Database password */
define( 'DB_PASSWORD', 'Abeyance1.732' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '8}iNJr#+f#Is<i*S:GBR{7l)<0)F|>r{}2HC~k->K]:&XG!m`K{BUA/4[=9x vzk');
define('SECURE_AUTH_KEY',  'Nd9T{D$6&o%-#v/0Q`WSA<Cw{,T8(9T;=|Pc[mc-4L4mf9K:CtJRA?CyZ{(Y7M|*');
define('LOGGED_IN_KEY',    '!w-mOnhZDJ+p2Z_;%^ZnxEO>Kn+}63[+cv3+7t>oVS<Ryp$*Z>`Iq6N_6KbD@Hoz');
define('NONCE_KEY',        'qYgXsw|m(Q+m(=b|Q)s*z$M4qKt3zd~W5?>/j}rh|~N;GhUm|(f~-a;sCnpIxW(H');
define('AUTH_SALT',        'r fcZBh&8BO%6?Gz|L,E?MaPvq`[^1:;z+[QUOA?-UvclW~_<+C|.)2m@q<]~$Mt');
define('SECURE_AUTH_SALT', 'S0a+TyX~Fk1BJl&wb3=UM,L@z7|`P#YyW3n`4DOq(N|y?CI!SML]DTO-]9aD/uD>');
define('LOGGED_IN_SALT',   '#X $HHLyTwI#F G=$ONagI5x`:k.zFQUz;eRFa/Sqy>Xd,7Dt5(1-HL/4&FG~B3[');
define('NONCE_SALT',       ';z$QQ+[A)`vlf=r`2n^|>15P#26]S{|wr>~9o%u6 dM9yoQH`A%VjU!L%E58MBCU');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
