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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '!_LhjN#K|N^kD~)3+l>GAg?vC##}j;bOjHvbQr}eLwe.s/~6Y:.Ts7_Xg 9q0&<Y' );
define( 'SECURE_AUTH_KEY',  '3|4jOP%x}oFUk#&UJyZ$Z8]Gr687FX,v1XU#LV1|N+,<q:GO&BVv^_F?89U#x5OM' );
define( 'LOGGED_IN_KEY',    'sBr~-;bNC&B_I21U&7Lp DA$V,5iY,3c*ov1b==<x%A8&UrWtua6@e*{8cYY=B7e' );
define( 'NONCE_KEY',        '$GW!w`8%W/9.lQ|m&C][F4I-G59j*i+15}maH!m9-)zRbPfPy2iaP~~ta~,ENz,k' );
define( 'AUTH_SALT',        ' |A&I 6F|8M&5@m1C=9or$++jme}=<WvWv:wB[Z5?NiWBK7e<qy+9 M/K3Oe 4QU' );
define( 'SECURE_AUTH_SALT', '(|oNAaOE1!e?#==ZAwwS,BP>23qZxlj;E<BlHc0Da6xMv@g?K&*F,R=y_Q= TvRw' );
define( 'LOGGED_IN_SALT',   '!}G0>zS^@hM}_ABO%<<P`?d@G{$+AK#Y[H%zPh[:ngB!}K{!I2$uPFzV1UW65XJg' );
define( 'NONCE_SALT',       '#EN]?WZDWBU%Ur!y;/o]KfhkJsqM4[n$F%ZV6|)RN=1.YO|}<FM>.6|LLAqxk.4A' );

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
