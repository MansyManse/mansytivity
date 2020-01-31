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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mansytivity_db' );

/** MySQL database username */
define( 'DB_USER', 'mansytivity' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mansytivity' );

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
define( 'AUTH_KEY',         'WKqVZ_4e0d^iH a8/Lo*77SEt>GsPc%La~xHJCD/344f*c7xgM_5_ni(zOJumW!`' );
define( 'SECURE_AUTH_KEY',  'Nr-7EB&=G(U#W IHZWS]K+X{~B:ZT2/@SmWIo&q~TZ&T(6:{0&e)/3#<n_Syb^%|' );
define( 'LOGGED_IN_KEY',    '+.tAF]){3RQj@vEc<y#zEy[~sr}.;9 @XtPsY}_y>*o<rnVHRz[PtM[g`;lQU5&i' );
define( 'NONCE_KEY',        '7&/%6NB[<gBS?:k!G$w{%CBOS~jh^4=]K!Oe/P{m8zGcb}w}q/!Z+ro+{IhKZcP_' );
define( 'AUTH_SALT',        '25rV<UqLB*[;dA$GbkX:bt>~AQRo5V|voV-p[V~/nm+6SKJ4x/YRW{_ZA0?+/1#m' );
define( 'SECURE_AUTH_SALT', 'sx@^>3i9nVlYHqIX[JaOzLuU;cC!bos+DarWar[qKN?a{kN&%3]4)V3g!6E[/DUH' );
define( 'LOGGED_IN_SALT',   'D|LJT4tq*MX,`C?8vF(VOqBx/o]f.g=itpLS q5d=J31pi.?HeS2`HDr}RM9rW|u' );
define( 'NONCE_SALT',       '*CJ>nM d},]Q>$?&1YR{goQ7a8k{mR=oPR*ys?!+z+(V6tVc{=om_a ToO-}Bld{' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
