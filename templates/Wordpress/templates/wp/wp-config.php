<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_CACHE', true ); // Added by W3 Total Cache


define('WP_ENV', getenv('WP_ENV')??'development' );

/**
 * https Check
 */
$https_enabled = (bool)getenv("WP_HTTPS");

if($https_enabled){
/** Set protocol HTTPS */
$_SERVER['HTTPS'] = 'on';
    define('WP_PROTO', 'https://');
    define('FORCE_SSL_ADMIN',true);
}else{
    define('FORCE_SSL_ADMIN',false); 
}


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');




/**#@+
 * Authentication Unique Keys and Salts.
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
require('wp-salt.php');
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */

define('FS_METHOD', 'direct');
define('FS_CHMOD_DIR', (0775 & ~umask()));
define('FS_CHMOD_FILE', (0664 & ~umask()));

//Disable Cron
define('DISABLE_WP_CRON', true);
#define('WP_CRON_LOCK_TIMEOUT', 60);

// Disable AUTO updates
define('AUTOMATIC_UPDATER_DISABLED', true);

//Limit post revisions
define('WP_POST_REVISIONS', 3);
define('COMPRESS_SCRIPTS', true);
define('COMPRESS_CSS', true);
define('CONCATENATE_SCRIPTS', true);
define('WP_MEMORY_LIMIT', '512M');
define('WPLANG', '');

//Remove after
define('ALLOW_UNFILTERED_UPLOADS', true);


/** Dev configuration  */
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);
define('DISALLOW_FILE_MODS', false);
define('W3TC_CONFIG_DIR', __DIR__ . '/wp-content/w3tc-config-dev/');



/**
 * Redis Object Cache Settings
 * @url https://wordpress.org/plugins/redis-cache/
 * @see ./wp-content/object-cache.php
 * Author: MoreNiche Ltd
 * Date: 22-02-2019
 * Description: To implement Redis cache plugin
 *
 */
define('WP_CACHE_KEY_SALT', md5(DB_NAME . $table_prefix . __FILE__));


/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */

if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
