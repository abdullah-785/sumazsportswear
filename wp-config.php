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
define( 'DB_NAME', 'sumazsportswear' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '?^]x&;B@r8p3[X%<A%t%L5<SO2o20bI;vpj;=@Y>[-0+jO9zkz1$imE-w(($5w`6' );
define( 'SECURE_AUTH_KEY',  '9zFK6#lj*aH8Rxd2% ]a+@/6Osr@]2,)C+*u4#Vbuc-Sy,I&@4I!(-h>DrNDf1>o' );
define( 'LOGGED_IN_KEY',    '[7|xJd{57obF)mQX3MYCsREE_(OmHbtSyP!Q=w4c`P*,+Y!Q~z#`1O,{:85MOB:O' );
define( 'NONCE_KEY',        '8.R+YHyC`){LrlWy}- :)6x?~I.ywfSV+|1Z4qi%eU%Db-4/S|]sz55v}A-9t:GF' );
define( 'AUTH_SALT',        '4:,];(4,%paZFl^SBo$D.ti}h[I>3Ug9QjizLoxct_HbgHeW%kIifL}Hx7xuA=07' );
define( 'SECURE_AUTH_SALT', 'yfr[gS!:)].qPzrVPb*?xr?`B~>Q&~%{~2-%FD 8ngy_JU{E|Qo).)s._7eU5E*a' );
define( 'LOGGED_IN_SALT',   '(lywF)a2J1TDFl/^h7ZRGm(k6uZXTby=oe)t%F(}![Dn|=`8{8C|d9(h0p#lat C' );
define( 'NONCE_SALT',       '%a;IX5>A?w1pXdh,r)7@PxZ_L:_`Kq)ld`%@!jokj~Ely6=VF[%u02nfFV(_Ov@0' );

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
