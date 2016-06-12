<?php

/**
 * URLs
 */
define('WP_HOME', env('WP_HOME', env('APP_URL')));
define('WP_SITEURL', env('WP_SITEURL', WP_HOME . '/wp'));
define('WP_DEBUG', true);

/**
 * Custom Content Directory
 * move to config
 */
//define('CONTENT_DIR', env('WP_CONTENTDIR'));
//define('WP_CONTENT_DIR', $webroot_dir . CONTENT_DIR);
//define('WP_CONTENT_URL', WP_HOME . CONTENT_DIR);

/**
 * DB settings
 */
define('DB_NAME', env('DB_DATABASE'));
define('DB_USER', env('DB_USERNAME'));
define('DB_PASSWORD', env('DB_PASSWORD'));
define('DB_HOST', env('DB_HOST') ?: 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix = env('DB_PREFIX') ?: 'wp_';

/**
 * Authentication Unique Keys and Salts
 */
define('AUTH_KEY', env('AUTH_KEY'));
define('SECURE_AUTH_KEY', env('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY', env('LOGGED_IN_KEY'));
define('NONCE_KEY', env('NONCE_KEY'));
define('AUTH_SALT', env('AUTH_SALT'));
define('SECURE_AUTH_SALT', env('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT', env('LOGGED_IN_SALT'));
define('NONCE_SALT', env('NONCE_SALT'));

/**
 * Custom Settings
 */
define('AUTOMATIC_UPDATER_DISABLED', true);
define('DISABLE_WP_CRON', true);
define('DISALLOW_FILE_EDIT', true);

/**
 * Bootstrap WordPress
 */
if (!defined('ABSPATH')) {
    define('ABSPATH', public_path('wp/'));
}

if( php_sapi_name() !== 'cli' ) {
    require_once(ABSPATH . 'wp-settings.php');
} else {
    define('WP_USE_THEMES', false);
    define('WP_INSTALLING', true);
    global $wp, $wp_query, $wp_the_query, $wp_rewrite, $wp_did_header;
    require_once(ABSPATH . 'wp-settings.php');
//    ob_end_clean();
}




