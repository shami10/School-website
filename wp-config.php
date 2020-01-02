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
define( 'DB_NAME', 'school' );

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
define( 'AUTH_KEY',         'VP33d#}$g]@rVjVH)iy1Tq6##-]SY:&,:;JMgX~}W~E=a!=TDjvRo}1EJo_D-:LI' );
define( 'SECURE_AUTH_KEY',  'M]-!/V1hv&5Uo*Mxm)$w[_I/5=eP71D[T0MXk%uW<Mo9q}jG(tpPFHdcwpB^$ XH' );
define( 'LOGGED_IN_KEY',    'ktML,vrQ]MTlUb~`uHfm:iEah1<WL}x!>MfS`t9vQm$*sKgNK5J)nixm3i!~09 w' );
define( 'NONCE_KEY',        ':Ovn}9A,2Ng+XZx%LSWnc1&[diDmiabY:ey#:.RBF]x~zO&+`]X?QC~GNn;cBg.%' );
define( 'AUTH_SALT',        '$cUx+g6i=?Bba-Dx]VT6D+&(QIg }g~dp[V9O%~ZL~9|OJj$VyDcgwo4afL;nFXQ' );
define( 'SECURE_AUTH_SALT', 'rjpXmHM?QGG0U6]1edWDy$O<LbAQ6k nHFsjA.RkEy%Yk7Tj2KG+AnS-SEC-`Nr!' );
define( 'LOGGED_IN_SALT',   ' 5n2{21$Tx,Nq|G.NZOYB|>0xJDi=6&<CqJ9v+&*#.-1zDoQ1Lm]e4*}Ak9t).+7' );
define( 'NONCE_SALT',       'hiq.ngfIU%5f&#ANz7}/mpD[6!IglCd%ralzY#RD`)t{,Gh2)#%>)nol0W1K9a~I' );

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
