<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'clothes' );

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
define( 'AUTH_KEY',         'qK,?up9,AjucUX#Y MwxJcfeQ>^v1S9@wtPUCDMi:2v8O5KUdy>E[RQc;kY7T?I%' );
define( 'SECURE_AUTH_KEY',  '0g%qI:@C;J%AqSWA!;1#[#B<%gXNhEIIA 3LTY4~s{>OnknjsYe8H[k6 $sT]n f' );
define( 'LOGGED_IN_KEY',    'DkZJ;(+RpxNah%l_-/10(NytL f8n)s ZAs)|O]G5@7dj?XP%wE[y:r|u~6V~fk<' );
define( 'NONCE_KEY',        ')/!+{$mzgFXi>@PhVDdg$i Cn>R?+=upYW-%dH_5]%$dtot@oc1;I-M>f&cnX+pu' );
define( 'AUTH_SALT',        'ow9?K1GpyI2@i@O5$);vxH%|NNNgxx{FlcfLS9uOiN..a4ttXRa>ti7ogZ$O5_s;' );
define( 'SECURE_AUTH_SALT', ':f#Efs7<fkakGV(E: SS8z)~%m-iREWwxE4Ji3PhPA5H%P{+,9O:p;2b</wzOM,;' );
define( 'LOGGED_IN_SALT',   'qDLPmgQ<h]n//fQEO-B>tw /sX%J02KW3wnpUWVx/tT)|?>m3|t|#q097Su}z]_E' );
define( 'NONCE_SALT',       'Tl05$|9DUo:8$hi!fdQxV>-BfWPp47Et4RMnB2#XH5c m#;)kl~960X]xip/Ec!t' );

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
