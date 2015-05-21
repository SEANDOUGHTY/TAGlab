<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CqN9XVDO[r#uv6_W)%Q7;7t9__:h_NN*e@`++QKu<S@&ZYXXkU*h|)M^}[>B_5ng');
define('SECURE_AUTH_KEY',  '*1v@p26#T:Q`,,ly[;UcYcUL>:,#K#F}{46qgcs-i7(8[%Iu=-g-qcVf#>MoHzG~');
define('LOGGED_IN_KEY',    'K9i^}|Nn[M9=+ztA[@xsQ-C)/fA.drgt5ydvFnsVS^HYptWSIC8tL8*~oeH1a02(');
define('NONCE_KEY',        'v^;6Ul0w)(SWC)f5@#EIvVQsN_w.~Q+E1GwI]qKioP9^@O 0A,jSqkw>Z3,KaAB<');
define('AUTH_SALT',        'cys r%Sn40cR=OfQr0O-_sC^9V:pk&4Ttl#HcEv)MO:B+s+> &Z))!$k*^~UpnMn');
define('SECURE_AUTH_SALT', 'o&qrK3sAmRC|/&h*]jJ-Hr2[}3tP;_HUqTmh5H+@}b$YXI/&B<X:B0LW,oo6E{k{');
define('LOGGED_IN_SALT',   'J&l|VcGvT(|kKlbeyj5qK/2h5quofFy0_Xerb~~fqZhiV@1m^7JDsuSl2i|{+N5F');
define('NONCE_SALT',       'r,uUbBDu~;kmo&|?J:~^+F76LLR~YpfFfbF8ZfzQMrmc^A4mL.~&~rYZNd|r_n?&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
