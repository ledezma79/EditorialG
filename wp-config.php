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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'O7<;67E[>-X<cB|3}^5|;W!J(J:jDUZmKrN6;E<@7#_nof%duw9s`H[Peg.4_(h ' );
define( 'SECURE_AUTH_KEY',   ')p,=h{r6_ax~r:;Z1k[bFK*F*HRpaUGZ(68er%M3(UjG$bF x[7cR~Gb&-+ry(TE' );
define( 'LOGGED_IN_KEY',     'N)$F%Z<h=VSaO`(RjqY7g{jVx5<lX54P?SV$Ob~yQ[H/prcyXF3SqfenRvz; 1rl' );
define( 'NONCE_KEY',         'J;0@2Xj0+(.k~G7k]q:6)ZYc}=uo}Fb6f][`xP:.ck<:P<8&1ae]Kbv3N`1tHCb{' );
define( 'AUTH_SALT',         'M-_]O?B]Ok/0KeSoUb,B5=Eko1ELc{Gycba`uoY!pc^-sJ1GE4Q;!5((7po2^j-m' );
define( 'SECURE_AUTH_SALT',  'b6,A`A#q2`c[x4,~@}AjJ|Q#MdDAWE-Y,U#U(^}3.M|Ph-7L5.nJay#033ZHZk*>' );
define( 'LOGGED_IN_SALT',    '+{,/V7b8#WJi25GqHX3tmL%G.Y~>qyA|W:7$?nHW0TQ? wc$acuO^]]QiGz%<o-X' );
define( 'NONCE_SALT',        'P?q-1+P7&GFUWKuSR,37/=lL9%!wC0D-L=D!dth^:83Cd(`uk{MTqZ.CHR2Vh0)`' );
define( 'WP_CACHE_KEY_SALT', '.=*Its} TX.cN:k3_#Tv$V#CR=$36>^|g__?&Pczdb7 gArym>w&U&,ZE5~Yp~s{' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
