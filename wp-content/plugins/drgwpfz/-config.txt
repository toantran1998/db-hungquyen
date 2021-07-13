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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'wp_user' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456c@' );

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
define( 'AUTH_KEY',         'LUtJ#Koy2J`YF.e<2H&omsLa^Hdv54ExX6U9b{_LuWzf:Prmpq]f4vAt)7w{*?{*' );
define( 'SECURE_AUTH_KEY',  '^IOV?dW]IE[,ag&>v=t!+M[>Ufmas:OAUkT|*T2y<kXEfXuU;BUf?=V?opA9WBBV' );
define( 'LOGGED_IN_KEY',    'HExJZt,7IaWc2A=ojPI%0aHG>W=3re7WSODytb=4AMWRE%$qv+m+~X,%pZhN$u%J' );
define( 'NONCE_KEY',        '7tr!Y6v-R[uC%G1wzA=?)@g>@aV)0pxRc4#|yXF.@P? CIu->v-p!57}s:.AIPa`' );
define( 'AUTH_SALT',        'vXa`_d>6wHg#hyo8>->Vz;-jNq(kxF0t~JVP48rBCA#p!H^r6?[W}YVYo.<T1s6@' );
define( 'SECURE_AUTH_SALT', '_PHe4A+Ho/crtH|g;2OQa26x)wDaDv9`ewJqR=%,>7I;cjtudi]jGTCrD`4E[Y@3' );
define( 'LOGGED_IN_SALT',   'vJR#^m8R_y!xlyv_g?U%FdCRgI/! 7;k;v3ZboWR}P.&V>>=OX9`-)!Wz#&]a-V~' );
define( 'NONCE_SALT',       '46k`(JYhik@y>V0Sg!6]Sgp;T/x.(SGVA8q#hPz4a,JIH+$FPu$JThXR!nC5zNP7' );

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
