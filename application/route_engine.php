<?php
$request_uri = $_SERVER['REQUEST_URI'];
$hostname = $_SERVER['HTTP_HOST'];

$_smackdir_ = explode('/', BASE_DIR);
$dir = $_smackdir_[count($_smackdir_) -1];
$route = "/";

if(preg_match("/(?<=".$dir.")(.)+/", $request_uri, $matches)){
	$route = $matches[0];
}

require BASE_DIR.'/routes.php';

$app = new BaseController();
foreach ($routes as $key => $getroute) {
	list($locator, $path) = explode('-', $getroute);
	if($locator === 'view'):
		if($route === "/index.php/{$path}" || $route === "/index.php/{$path}/"):
			if(file_exists(BASE_DIR."/view/{$path}.php")){
				if(method_exists($app, $path)){
					if($app->{$path}() !== NULL):
						foreach($app->{$path}() as $key => $data):
							${$key} = $data;
						endforeach;
					endif;
				}
				foreach($regulations as $regulation){
					if($regulation === $path):
						if(Session::has('id')):
							require_once BASE_DIR."/view/{$path}.php";
						else:
							redirect(site_url());
						endif;
					else:
						require_once BASE_DIR."/view/{$path}.php";
					endif;
				}
				
			}else{
				$__e = 'File Missing Error';
				$errors = 'The view file for '.$path.' was not found';
				require_once BASE_DIR.'/application/errors.php';
				die();
			}
		endif;
	elseif($locator === 'controller'):
		if($route === "/index.php/{$path}" || $route === "/index.php/{$path}/"):
			if(method_exists($app, $path)){
				$app->{$path}();
			} else{
				echo "Method not found";
			}
		endif;
	else:
		$__e = 'Routing Method Error';
		$errors = $locator.' is not a valid route prefix';
		require_once BASE_DIR.'/application/errors.php';
		die();
	endif;
}

$modded = [];
$modded_suffixed = [];
$i = 0;
foreach ($routes as $mod) {
	list($locator, $path) = explode('-', $mod);
	$modded[$i] = '/index.php/'.$path;
	$modded_suffixed[$i] = '/index.php/'.$path.'/';
	$i++;
}
if($route === '/'){
	require_once BASE_DIR.'/view/index.php';
}elseif ($route === '/index.php') {
	require_once BASE_DIR.'/view/index.php';
}elseif ($route == '/index.php/') {
	require_once BASE_DIR.'/view/index.php';
}elseif(!in_array($route, $modded)&&!in_array($route, $modded_suffixed)){
	$__e = 'Routing Error';
	$errors = 'Route is not set for '.$route;
	require_once BASE_DIR.'/application/errors.php';
	die();
}