<?php
/*
This is a sample local-config.php file
In it, you *must* include the four main database defines

You may include other settings here that you only want enabled on your local development checkouts
*/

define( 'DB_NAME', 'scta' );
define( 'DB_USER', 'scta' );
define( 'DB_PASSWORD', 'scta' );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'

define('FS_METHOD','direct');

@ini_set('log_errors','On'); // enable or disable php error logging (use 'On' or 'Off')
@ini_set('display_errors','On'); // enable or disable public display of errors (use 'On' or 'Off')
@ini_set('error_log','/var/www/southcarolinatheatre.local/php_error.log'); // path to server-writable log file

define( 'SAVEQUERIES', true );
define( 'WP_DEBUG', true );
define('LOCALHOST', true);

define('WP_TEMP_DIR', dirname(__FILE__) . '/wp-content/temp/');
