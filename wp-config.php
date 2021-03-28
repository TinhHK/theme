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
define( 'DB_NAME', 'dev_theme' );

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
define( 'AUTH_KEY',         '(4nGuYhec RZCyNGk_l]fN;![0+b`O>wk%{t!=8DO`M1QYNMt B0MTAN*|V]:nqL' );
define( 'SECURE_AUTH_KEY',  '/Zq!h1sJq=aU-)(S1g4R)= P&rsp[KA^OsK?>~CO%Ob0DG[onN:1&V0rJCMKA01F' );
define( 'LOGGED_IN_KEY',    '6z.]xv@{hbqYw>K@*ZP(BNnHS=O~+8mPUw%q#W}4[W6XH9AoN7X)-2),m#m,nHS(' );
define( 'NONCE_KEY',        'D(V=u|AL7RJ#tWY5>a1V5Oa109i*,GnX~+lZ}3hn-rf%@4/y/OqGD/xz@E.T0%E[' );
define( 'AUTH_SALT',        '&4FQ[8dmt}?h!-.RLQ3~DT!b$d^96*TU7.FSK/b4jLMU=ENs,F>p_5jQR$5x.rTh' );
define( 'SECURE_AUTH_SALT', 'Wl-!c]9%Wt=dOW$6yR2[E[N;$&KH}aOVJ!o IIp]e*v|h0uj(&vK.y.eoQ ^v|n0' );
define( 'LOGGED_IN_SALT',   '_|l<wcv3*6R[iuF3qOE_mIK^v(gL4DfZLG{#@<+x8!ZJ)U<Qh&4wMwbVT@KtWF,3' );
define( 'NONCE_SALT',       'ufAWJN_wJy$qD7Tkq|Ir>X 5GkjyrmB~gj,p):274*dTL+Ku4qtl2X!`vVQ}yY<]' );

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
