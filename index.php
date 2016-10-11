<?php

define('DIR_WEBROOT', str_replace('index.php','', $_SERVER['SCRIPT_NAME']));
define('DIR_ROOT', str_replace('index.php','', $_SERVER['SCRIPT_FILENAME']));

define('DIR_CTRL',DIR_ROOT .'kernel/controller/');
define('DIR_CORE',DIR_ROOT . 'kernel/');
define('DIR_MODL',DIR_ROOT .'kernel/class/');
define('DIR_VIEW',DIR_ROOT .'kernel/view/');
define('DIR_CSS',DIR_WEBROOT.'css/');
require_once ('conf/configbdd.php');

	if (!empty($_GET['p'])){
		$pwet = explode('/',$_GET['p']);
		$controller = $pwet[0];
		if(isset($pwet[1])){
			$action = $pwet[1];

		}else{

			$action = 'index';
		}
	}else{
		$controller = 'categories';
		$action = 'index';
	}
	if(isset($pwet[2])){
		$id = $pwet[2];
		require_once(DIR_CTRL . $controller .'.php');
		$controller = new $controller();
		$controller->$action($id);

	}else{
		require_once(DIR_CTRL . $controller .'.php');
		$controller = new $controller();
		$controller->$action();
	}
?>