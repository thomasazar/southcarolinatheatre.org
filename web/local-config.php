<?php
/*
This is a sample local-config.php file
In it, you *must* include the four main database defines

You may include other settings here that you only want enabled on your local development checkouts
*/

define( 'DB_NAME', 'southcarolinatheatre_local_development' );
define( 'DB_USER', 'southcarolinatheatre_local' );
define( 'DB_PASSWORD', 'southcarolinatheatre' );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'

define('FS_METHOD','direct');

@ini_set('log_errors','On'); // enable or disable php error logging (use 'On' or 'Off')
@ini_set('display_errors','On'); // enable or disable public display of errors (use 'On' or 'Off')
@ini_set('error_log', __DIR__ . '/php_error.log'); // path to server-writable log file

define( 'SAVEQUERIES', true );
define( 'WP_DEBUG', true );
define('LOCALHOST', true);
?>
