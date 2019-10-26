<?php
define('CONCATENATE_SCRIPTS', false);
define('DISALLOW_FILE_EDIT', true);
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/vhosts/udruzenje.ba/httpdocs/wp-content/plugins/wp-super-cache/' );
define('WP_AUTO_UPDATE_CORE', false);// Diese Einstellung ist erforderlich, damit WordPress-Updates korrekt in WordPress Toolkit verwaltet werden können. Entfernen Sie diese Zeile, wenn diese WordPress-Website nicht mehr in WordPress Toolkit verwaltet wird.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cms' );

/** MySQL database username */
define( 'DB_USER', 'wp_xsqh7' );

/** MySQL database password */
define( 'DB_PASSWORD', '34!NAjv8Gh' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '&5ItUMu[TrY301m~|o_#_a87733uHVY&1-4@213RHa011oc&_Db:48!#lx;;vL7[');
define('SECURE_AUTH_KEY', 'N|7p/Iu7U|/r2QN34)9@c2F9((9r1u2c3%@[7@:Vbn&pB_BM;2xd6(57)Q7FaNk)');
define('LOGGED_IN_KEY', 'uc~M~A_S-%79bW2;8LF45y&/c99H7)673uVI(4~(Pf(sV0yv_&e2w[X):]L3Ad8l');
define('NONCE_KEY', '3Pw31y|7%dQy6d07/|x8y4%x4ppn~*mrbJx@Q8UH|W%+XqKQ;!2p8:5tsH-ohweA');
define('AUTH_SALT', 'c%5c+D40uK-d93FY!03zMmL&z4|f_zkNe*+]Q0YZnfmwaTm]-@6)T3YX!52rNh6R');
define('SECURE_AUTH_SALT', '+x##6X43G5/01hDOz1kW0m!B7l*iz8ek!E/7_*o~~2271%GpvH_3k]8fJ&ztg-dD');
define('LOGGED_IN_SALT', 'fc3j:4tg@9k&&7b+VR1*ShDPCv*BO1PQWm6-8JUCNl]]-CxW6digJ7D-!12|55#4');
define('NONCE_SALT', '4NFz09T]%N)7FQf2n9f&8vJ~d4F_;h+45Ki9&:Soe331yfQf%3s)+D032oL9%66N');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '3r3WIrMmS_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
