<?php
/**
* Configure routes here
*/
$routes = 
array(
	// Register routes
	'view-login', #GET
	'view-admin',
	'controller-auth', #POST
	'controller-logout',
	'controller-apply'
);

/**
* Register view routes with regulated page access
* Since they are all view routes, prefix is not required
*/
$regulations = [
	'admin',
];
