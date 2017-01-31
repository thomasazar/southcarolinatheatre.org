<?php

$root_dir    = dirname(__DIR__);
$webroot_dir = $root_dir . '/web';
$config_dir  = $root_dir . '/config';

$defines_config = $config_dir . '/.env';
if (file_exists($defines_config)) {
  $defines = parse_ini_file($defines_config);
} else {
  die('No configuration file found.');
}

define('WP_ENV', $defines['WP_ENV']);
$env_config = $config_dir . '/environments/' . WP_ENV . '.php';
if (file_exists($env_config)) {
  require_once($env_config);
}

/**
 * URLs
 */
define('WP_HOME', $defines['WP_HOME']);
define('WP_SITEURL', WP_HOME . '/wp');

/**
 * Custom Content Directory
 */
define('CONTENT_DIR', '/app');
define('WP_CONTENT_DIR', $webroot_dir . CONTENT_DIR);
define('WP_CONTENT_URL', WP_HOME . CONTENT_DIR);

/**
 * DB settings
 */
define('DB_NAME', $defines['DB_NAME']);
define('DB_USER', $defines['DB_USER']);
define('DB_PASSWORD', $defines['DB_PASSWORD']);
define('DB_HOST', $defines['DB_HOST'] ?: 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');
$table_prefix = $defines['DB_PREFIX'] ?: 'wp_';

/**
 * Authentication Unique Keys and Salts
 */
define('AUTH_KEY', $defines['AUTH_KEY']);
define('SECURE_AUTH_KEY', $defines['SECURE_AUTH_KEY']);
define('LOGGED_IN_KEY', $defines['LOGGED_IN_KEY']);
define('NONCE_KEY', $defines['NONCE_KEY']);
define('AUTH_SALT', $defines['AUTH_SALT']);
define('SECURE_AUTH_SALT', $defines['SECURE_AUTH_SALT']);
define('LOGGED_IN_SALT', $defines['LOGGED_IN_SALT']);
define('NONCE_SALT', $defines['NONCE_SALT']);

/**
 * Custom Settings
 */
define('AUTOMATIC_UPDATER_DISABLED', true);
define('DISABLE_WP_CRON', $defines['DISABLE_WP_CRON'] ?: false);
define('DISALLOW_FILE_EDIT', true);
define('WPCF7_LOAD_CSS', false);

/**
 * Bootstrap WordPress
 */
if (!defined('ABSPATH')) {
    define('ABSPATH', $webroot_dir . '/wp/');
}
