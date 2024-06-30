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
define( 'DB_NAME', 'wp-server' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'q((Trt&SZ9=3HevSjPpmf>&gt`h/c.1wN7h,Eob(8#*h)jGmm:{L^jO!LnWaq2wn' );
define( 'SECURE_AUTH_KEY',  'xUxwth fbk/@alRs^6jtASCsF$_55nm9N~rekE)qAW^3M1u5v`%5Z041BCI!#gG/' );
define( 'LOGGED_IN_KEY',    'M$2l!%r(ypJxsx}_4,Q NBjpxYw5kDz?7NgWd.>4-C?<LnlH$<Fr*@0#8>p?T3 $' );
define( 'NONCE_KEY',        'z4bN;L7*,goTrY$}gce,ux0ojU4:]h8)~-KfX&I.DO|D>G!>APWi5MQ&-g!A),:U' );
define( 'AUTH_SALT',        '4`@8Xdm;]-5Wj}s/xv+yjh3)VmSsr)ZiO0=?Texf_W!&JC_O.f 6!0F1.=BOjlKx' );
define( 'SECURE_AUTH_SALT', 'rG?f?iues3!h4P+oZt},v1>AF+Furex^K `{ 8H%{`R#9+-HuL&siYb[Jm)EP7:C' );
define( 'LOGGED_IN_SALT',   'uT.!?!X)D/kEtQDV4S-Q0`}-*q0~ E+ Mr!Bm6Q4><y)uz`Nh0r#.13P2W1)Z4b*' );
define( 'NONCE_SALT',       'Yn:&@)|DubW/%TA/ww6~@(@>4>Wv*>SW^!D)n(m,tw;)dw~R>DnT2Gws-cF&wg|e' );

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
