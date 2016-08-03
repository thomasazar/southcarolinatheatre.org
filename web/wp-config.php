<?php
@ini_set('log_errors','On'); // enable or disable php error logging (use 'On' or 'Off')
@ini_set('error_log', dirname(__DIR__) . '/php_error.log'); // path to server-writable log file

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/wp/');

define('FS_METHOD','direct');

/** Location of your WordPress configuration. */
require_once(dirname(__DIR__) . '/config/application.php');

require_once(ABSPATH . 'wp-settings.php');
