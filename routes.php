<?php
/**
* Configure routes here
*/
$routes = 
array(
	// Register routes
	'view-login', #get
	'controller-auth', #post
	'view-admin',
	'view-ministry',
	'view-patient',
	'view-pediatrist',
	'view-pharmacist',
	'controller-logout',
	'controller-adduser',
	'controller-editadmin',
	'controller-edituser',
	'controller-deleteuser',
	'controller-pushprescription',
	'controller-drugadd',
	'controller-diseaseadd',
	'controller-drugdel',
	'controller-diseasedel'
);

/**
* Register view routes with regulated page access
* Since they are all view routes, prefix is not required
*/
$regulations = [
	'admin',
	'ministry',
	'patient',
	'pediatrist',
	'pharmacist'
];