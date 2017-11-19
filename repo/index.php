<?php
if (!empty($argc)) {
    $_SERVER['HTTP_HOST'] = $argv[1];
}
// ini_set('xdebug.max_nesting_level', 200);

define('DS', DIRECTORY_SEPARATOR);
define('APPS_DIR', 'apps');
define('MAIN_APP', 'main');
define('ROOT', dirname(__FILE__));

/**
* eClass
*/
require APPS_DIR . DS . MAIN_APP . DS . 'Config' . DS . 'domains.php';
require 'cake' . DS . 'routes.php';

$fileName = '';
foreach ($builds['App'] as $path) {
	if (file_exists($path . DS . WEBROOT_DIR . DS . 'index.php')) {
		$fileName = $path . DS . WEBROOT_DIR . DS . 'index.php';
		break;
	}
}
require $fileName;
?>
