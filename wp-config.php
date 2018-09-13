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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpcommerce' );

/** MySQL database username */
define( 'DB_USER', 'wpcommerce' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Hh445AV7-E8-' );

/** MySQL hostname */
define( 'DB_HOST', 'den1.mysql5.gear.host' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '47xs~u^WEU]5Y$l]>oC(^DOO8CLt?xx|1!Db5sGy`oyLmnh2wO4QMBZ+fvY6+1,E' );
define( 'SECURE_AUTH_KEY',   'IX5lkQT.|C`N6|p%,3?(u!tK:w5o?[M!D+;~B@3PrnNoC|J#nZeX~IC/:5L{GjOy' );
define( 'LOGGED_IN_KEY',     ')3HJ>sXa,W(oq(~p<]2z`)/|Lo?h9;AWY!!!+cfI_:l)kVgxX2l_}`FQ5RDdKQ*:' );
define( 'NONCE_KEY',         '=D4i.@xfMC=Tnm8rZWJR-7dX(z`l!:I)^8(}v+<H-XBBB.?Ih)e5~_9.]HQZY!M[' );
define( 'AUTH_SALT',         'PeL<V)@Xlbxdur&9If1Hy]kqa}f<qsI;/%4k<qzPR,5jbo,|Kjf*~S0`iE2:|Ff#' );
define( 'SECURE_AUTH_SALT',  '3%t(A%`t,3;Io=Nf:#NN> AB3&KFHk=pY+a}&3g(!DKiCznL;ZK:5CkJJ6@q/`ys' );
define( 'LOGGED_IN_SALT',    '^urah ]biYDNI2jLlcKo%3fPn$zcYq03,PE+fN./xBpbvSRYo3=Nx?Nh,~tD|guh' );
define( 'NONCE_SALT',        '*Lw]kL:^)6dbgk-wN {.uvn.;S[vA^Kg}*Lhts;^>KXA}e;=$h(OpM,~wmZuLBL~' );
define( 'WP_CACHE_KEY_SALT', '1|3AGziLAe%S$vhQ%8B^:tB~&,n/>qIDdA|O+Q2Hh@>$dnZa:-cnaWQ(2g#J{;ob' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
