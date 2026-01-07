<?php
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);
define('WP_DEBUG_LOG', true);
define('SCRIPT_DEBUG', true);

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coalitiontest' );

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
define( 'AUTH_KEY',         'eB=.1$cXTF-dbO>RjZ-`}[D+&4dhgQX1%dtP!p>P^9pATZL?>aNX&tjysaWk>0Y5' );
define( 'SECURE_AUTH_KEY',  '~QB&;(IY$A!JtSmD?j#7501i4I *z%V$d0[STN6(WYf6E#@`_u(nDhCWuS!sIP&;' );
define( 'LOGGED_IN_KEY',    'vn$;eah@/WVUOF4!l<E]ZTU~6_sTyr=-qU.Ms@>`[C%O},KV!u(vsOq.+Ski|gm{' );
define( 'NONCE_KEY',        '|l PhsN:Q#Xz`Ui(iqX_u:w}?.|wM^ZKiLVa {I5)hPWWuhcl |a<jg*vud.[i(T' );
define( 'AUTH_SALT',        'ap>gO5Vp]u4g<@2O/gxPf`yI{Cwc(39.RU}=hA]$eY|NB=Jti-?D 4@fD]/ChC]^' );
define( 'SECURE_AUTH_SALT', 'Wn4Q8{xyT:./ID-nVt57,shVt5!A}<J)PYg?*|k3i8oSXb?C(Rl&^V-GU$ir!C.K' );
define( 'LOGGED_IN_SALT',   'W,nZm-$cR!`StG2}rZQt:#,qmbk):SC2!E2`6LOt%P.m`IS4I[$1g)~i&G%1HO}D' );
define( 'NONCE_SALT',       'iWYM$=G(YbL|(NoC*4VcomKV4:89c&E`9/iJo..O<2`68{kWm_m@5og>z3,zeM]b' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
/**define( 'WP_DEBUG', false ); */

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
/** define('WP_ALLOW_REPAIR', true); */
