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
if (file_exists(dirname(__FILE__) . '/wp-config-local.php')) {
    include_once 'wp-config-local.php';
} else {
    /** The name of the database for WordPress */
    define('DB_NAME', 'u723628018_loveu');

    /** MySQL database username */
    define('DB_USER', 'u723628018_loveu');

    /** MySQL database password */
    define('DB_PASSWORD', 'djkrjlfd69');

    /** MySQL hostname */
    define('DB_HOST', 'mysql.hostinger.com.ua');

    /** Database Charset to use in creating database tables. */
    define('DB_CHARSET', 'utf8');

    /** The Database Collate type. Don't change this if in doubt. */
    define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'ou`&f,l`EBx/MX2WQihXg8_WaIS 9a_|+%,+kR1{R=|x~6MRB=J7|5v; /A~kzHI');
define('SECURE_AUTH_KEY', '&Fj`+9zhl}l~3]eMUv+],DI5?v=T30h;DP.n`D*1SmK~`Y4{fR:cn/@Ct1-k;n3U');
define('LOGGED_IN_KEY', '$NioG53*ft&Ox`fPxeSh!lTZ@?z6i(U;|,2{|>_x}*6aNv:=W_ 3^&~L-AeoC;wK');
define('NONCE_KEY', 'EC::LI#OLGwf?GofJgLf#_.)k=bKnS:0h^;=wXI3Vi|O(e|>vEXmE!9|3M`,tIU3');
define('AUTH_SALT', 'SF1E,{-v^KMUWoL<9sxP5TSnDaZr)Xw84s>BcL{+r2/vJez)Adp9^A5xB|wH$7~?');
define('SECURE_AUTH_SALT', 'oxq>7/_D~Xufr5{6,IS<3m7+^Y9;Jr-Li+(ee|m(=g-&T_.,)jsBWWLu5<vJsV]V');
define('LOGGED_IN_SALT', 'G7Ju|`W.s+uyN9?xO&3Ufp3Wr>N^AZFvbG^|j{TvD)1}au6d^}Zt-MjmNCX hGJj');
define('NONCE_SALT', 'nl+z]S^PxjoMTKB:g@= /L/X!g@U5S%4m}@#H|UX0+pX%|fdS:)A%K+W8z1R)|8c');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
