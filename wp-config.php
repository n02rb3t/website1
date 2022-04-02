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
define( 'DB_NAME', 'web1' );

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
define( 'AUTH_KEY',         'zqT#gXb&{p%.j()xViLx%a~!m[}T3vQC/QO~2gH!_z9Om51_6k}ul2ffJ?6r1GK|' );
define( 'SECURE_AUTH_KEY',  '0qzrWi~~g:ZOWi8&2+xd+AHzihYFim_Slr_*91V&T]VlK1LJZVdXmx9IM],M$b23' );
define( 'LOGGED_IN_KEY',    's6PR4y~Yq%h?]_~[RtK&,F}1GeM2 [+bMNe3}BsgAu>cjRlR;tDZ/N0bm.+LWUKa' );
define( 'NONCE_KEY',        'HIet=?%e1_DC +B+bx$G(`Q`c,K(.+#SY:G8aqrvsgeiqL}!jWq*-2ra&f==Xgt{' );
define( 'AUTH_SALT',        'P,#pxbtE/vOOY^MfHARgu/iZ^HYx<>7& k](pE+J42E@~~A34w,z#2$_+Ovk~d0$' );
define( 'SECURE_AUTH_SALT', 'wUR$q!hR|%ew.uSA)>M%=>I{.VAvQS?2L0=D(Zda[2>LPD/=VMo/NmV@hJ9(D%8G' );
define( 'LOGGED_IN_SALT',   ')#Jol=^~c$7]GB$?&[Q}FH`QQGU~]Ph=<_.fJU2lC*v$_T~FUjy2+*{R0J6pndRF' );
define( 'NONCE_SALT',       ')2.CkhFlE[%)]H:yF*Z[fT2N!u$s;6oY1gz%Fo{sztLvJGy~7AkLh(g>nBZvrq(q' );

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
