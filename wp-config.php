<?php
define( 'WP_CACHE', true );
 // By SiteGround Optimizer

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbzpgblamtcdlt' );

/** Database username */
define( 'DB_USER', 'u6tutuiugoxrq' );

/** Database password */
define( 'DB_PASSWORD', '0nkhncp4szo0' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'VoznT2.HV:>UGA )~YOGUMfGsU$@zb~6twft^Bc:C=k]W db:n$6GF-u b`YG8bL' );
define( 'SECURE_AUTH_KEY',   'IO6A!4Ew(pzsXR0-U*h[Z#! O|PPUp6PlB{?CStud>|QIpQwF8I2-:>n.w;/*R?r' );
define( 'LOGGED_IN_KEY',     '{U `b~+nj)StYw1~yX9`cc.t){5$t+,w?TD9.a{f&Aw(,${hwHEz+qdE|agwjI^u' );
define( 'NONCE_KEY',         'n*mhQ^X|^]:{hQ<]ZYHjp9uiIfDsFA]_g-= :;HM.5?iOO&^MF~4$jO5{s^D}f*@' );
define( 'AUTH_SALT',         '@bOYI_;>.hJ{A#I4Srnp-z;yh29mNOp qCPX1k`S4$7FlE|viu$HIXtb8VP,._*g' );
define( 'SECURE_AUTH_SALT',  'O,kn3hRlKDO2$P~PY1j/ljeYE%c4>e B@ECT]q{e:CMua_I1[N,qS(f#y.sd#Hg1' );
define( 'LOGGED_IN_SALT',    ';av)Omq*Bl~ocPk.@m.1e+8Mkv<5Lg*[10(IzcSQNs0y_Quv$jC|QW@t3ejoyUnQ' );
define( 'NONCE_SALT',        'F(41q(%P>Zm:)k9lmQ)e0+Ee/CMK~/2P74&&cMyK|.S,gW|7X= 9 OR=+[5:Ln%r' );
define( 'WP_CACHE_KEY_SALT', 'qCM,s0nOJ5!h~-T6?IXwRP8p:>Ej/?8KUdWJI_-O%Ps<>>dAc4yBUY(;[#H@YU;&' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vsj_';

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
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
