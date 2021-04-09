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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newaboutuspage' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'FsdzUyxqG`),cm~pn-u8q7k6Cw!pt,8jBZaUKiO|l_5WA`uz(z&T{Ty>`[y0j+ep' );
define( 'SECURE_AUTH_KEY',  '($J^}6]eXAKdm!z.I[nQWk5S.S1@ZGC+LXSFzF2`?i^HL*^INERR+-9tih/q3e^u' );
define( 'LOGGED_IN_KEY',    'h@sD{+_![i}5s8S2U(JhEKI5@AXy60vGL!#<i8hz}rtN$P 5^bLdC9D>WUUCmVDT' );
define( 'NONCE_KEY',        'X}jy]/@qO`K_/>(15#^hm)Kdg1<:Y)JyS=[R|:,UYJbEb@c#Da2iAM;+v,m{/W2Y' );
define( 'AUTH_SALT',        '@DVzZM8IXG+MDos)3m0OLYN6cX([kc{#5m,pi5$&8V}c$4RDMj6WS?MFWpqkBn,T' );
define( 'SECURE_AUTH_SALT', 'xKGlra!Nv:.nb-defD1Da4+uWrNOcYE0F9Cd5H6He1ZU4]t?i+g)!YpZIRXI&[m2' );
define( 'LOGGED_IN_SALT',   '3r;XrtejP:@{$2yq&$MbqQM;@Ul-#{:d@&Z!>a,/,Oo @1*zvB]P|.1@}[Ju8E$Y' );
define( 'NONCE_SALT',       'P(m`{U7,dCvR1F-tZLTRpSZbR&m_6[CCSlp@YLyt7_P_!9q;U,T&?&H3=55.LZ(8' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
