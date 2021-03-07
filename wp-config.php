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

// local settings
define( 'DB_NAME', 'remember-cambridge' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );

//server settings

// define( 'DB_NAME', 'dbs1534407' );
// define( 'DB_USER', 'dbu1139427' );
// define( 'DB_PASSWORD', 'RememberCambridge123!' );
// define( 'DB_HOST', 'db5001869017.hosting-data.io' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'nuI0)8WOu*W= d77(,l7A<zIyQl@.Fr5T_//E-J`bZ%-4Z& C{)9v!*TdoCbY]-;' );
define( 'SECURE_AUTH_KEY',  '~5D<bu`8{({:))iC^79ttj+?(07KaBQT%sr&m)<X$q_)r_-TN]?)VJVJbDsj8UhB' );
define( 'LOGGED_IN_KEY',    '.6$Ur*+<d;!U$d,YmuWBy/:vWSG)< 5{^Y&a{`!_F gNCT9*zA]5WW95Y/pvu[dh' );
define( 'NONCE_KEY',        'uC=f72RbbTEQko,rD3U?MO}i(LFl^*}hphQvNd5+oBU>O%vW-b*>h>=s},bG1rlv' );
define( 'AUTH_SALT',        'MRf+!v-@Z!Po29D.Rq*1%LCAv$n)Tg?=Rc<eCf/7tCRV2V<l+2!a{rW2p7`=F2m:' );
define( 'SECURE_AUTH_SALT', 'Q`w0UvZZhMp^<V4&&>?STZ! ?QN}C(a2:7[VJkB5uE*I$Y, ayz6(je=UKRJR2@g' );
define( 'LOGGED_IN_SALT',   'EFx5a7|wWZ`gW9$uarPeT3T~d3#jEo:p~vIS*1l#W`hUOf=$0+5f Z6-JnD!KotB' );
define( 'NONCE_SALT',       'uI<r3e[%K|f;uEo^Fo:4u+[`H<9pn?2]5 ,,q~FIR<WqkctpU=xP.?)E;fyo}Aid' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';