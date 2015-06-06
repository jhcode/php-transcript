<?php
/**
* @since 12/11/2014
* @author Joseph Rex (http://josephrex.me/)
* @return configuration arrays for procedural use
*/
// Database Configuration
$dbconfig = 
[
	'username' 		=> 'root', // Your MySQL database username
	'password'		=> 'restricted', // Your MySQL database password. Leave blank if none
	'host'			=> 'localhost', // Host name: Leave this as localhost in most cases
	'database'		=> 'transcript_db' // Database Name
];
// Site Configuration
$site = 
[
// Enter the location of the application on your server e.g http://localhost/precure
	'url'			=> 'http://joseph.rex/projects/transcriptn', 
];
define('BASE_DIR', __DIR__);
define('__vendors__', __DIR__.'/vendor');

// Vendor Libraries
$vendor = 
[
	'password_compat'	=> __vendors__.'/ircmaxell/password-compat/lib/password.php',
];
