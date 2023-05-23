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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecm' );

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
define( 'AUTH_KEY',         'Z^WcbvR98g>P) hXK@zEHJLWuhBMnk,i02GZap7}RcAP;rmV;}p ;V1q,&<- 2]{' );
define( 'SECURE_AUTH_KEY',  'o?Ad/SO n8okJ*DSKuQzE(>WQt*zKV8T%P8j[rA7JbSx2zVPz;<@$}zZvIyz>fka' );
define( 'LOGGED_IN_KEY',    'SVmldQv8dq4jh7CH&DIl*@`gOr@{{~#6wO`:rDEh|fg~i[c<DwmU=XN>ya_YztPi' );
define( 'NONCE_KEY',        '!f3Kf/1J1iF^@cTWh58MKUE.6&k7_YcF}[[(eBsm}FDU>8QN1^#MClxJ8mQm[{di' );
define( 'AUTH_SALT',        '|Ps.CB#flf8g$DKO:oHl_Dpe]HxMQ{jb$b`wMo?ccMl1LYwxq9Hj1RwgN`dED?aQ' );
define( 'SECURE_AUTH_SALT', '%&<&wP3c*>>(paa)cWsa@cd&}R<7#UEZF)37z^lQf6QbAO<lybpEeN&v#N5tB5eE' );
define( 'LOGGED_IN_SALT',   '&=:61&/x.p+Az*pGl /fGYpQCsLJs~Hn24b6DI}56hAC[Oq}XbD,v1[SFO}]H,zx' );
define( 'NONCE_SALT',       '5t%j*.acQjg!d<=$~;#7%%,psYMe*gj<f]`TrQYpwM& pSzgY/mps&b2+E@+:!qU' );

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
