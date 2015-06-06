<?php
session_name('transcript');
session_start();
/**
* @since 12/11/2014
* @author Joseph Rex (http://josephrex.me/)
* @return index
*/
// Import required modules
require 'config.php';
require 'application/database.php';
require 'application/core.php';
require 'autoload.php';
require 'controller/base.php';

// Start the application
$app = new BaseController();
$app->start();