<?php
require_once "Controller/Autoloader.php";

//$controller = new Controller_Default();
$url = $_SERVER['REQUEST_URI'];

//$controller->index();
$config = new Config_Default();

$controllerName = '';
$actionName     = '';

// On définit le controller et l'action à associer en fonction de la route
if ($url == '' || $url == '/'){
	$controllerName = 'Controller_Default';
	$actionName     = 'index';
} else {
	foreach ($config->getRoutes() as $route => $value){
		if (ltrim($url, "/") == $route){
			$controllerName = $value['controller'];
			$actionName     = $value['action'];
			break;
		}
	}

	if ($controllerName == '' && $actionName == ''){
			$controllerName = 'Controller_Default';
			$actionName     = 'error';
	}
}

		
$controller = new $controllerName();
$controller->$actionName();

