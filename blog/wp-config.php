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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/yjh5crlunns5/public_html/blog/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'scawp' );

/** MySQL database username */
define( 'DB_USER', 'scadb_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Sca$9891' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/!|_Y: xkqvTt_vD{6[#BFFTL9DUV-Wsg-5pEW(%MYE|VI.hg+F3UF[1$2`Lz6PZ' );
define( 'SECURE_AUTH_KEY',  'W-{Bjw3vXKuWx&wr+q]&L0uZ]UI9k= p(bz +5sk*NA}D:F.{O7 eel<t4+!xrb0' );
define( 'LOGGED_IN_KEY',    'bCq_yGf|eMM:X#-E+eq50 YoEZQD/,/CJ&[,z,OWP5_|;y:pZZel.4SZ~?TL8SFh' );
define( 'NONCE_KEY',        'T%+> avdcBB*UTyf18CtSd*^LNz5.%@39+ctP]Q)3:J3%$TR)5sB3}0LRs[K$$TZ' );
define( 'AUTH_SALT',        'mK*ib_|:S&Dry[)468hqS*=e&yNLqi26<U?=ag_*La*])o$,jUYr!sf,*bp]tyGf' );
define( 'SECURE_AUTH_SALT', '|JX&n<n0lbiQp;R-DBM|i3ob1f`ug|?(I_ 3p2gslAbj8D73tr:v7$M4e*+7da_e' );
define( 'LOGGED_IN_SALT',   't<ximuAEFOjs.XS[ks]PAuqWo`Bt8rdPRIS/`OvTJ02`z[:YgN4,ht!w;sO|DFng' );
define( 'NONCE_SALT',       '><[0t{TTBJ dGxy3%2U]H[}6D!rz]h.WF/C8`{T64 1y<,efxN2j*CiNq8 NrAT ' );

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
