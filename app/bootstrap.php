<?php 

// Composer dependencies
require_once '../vendor/autoload.php';

$container = new \Slim\Container;
// Adding items to container
$container['config'] = function($c) {
	return new \Noodlehaus\Config(['../config/app.php']);
};


// Create new App instance
$app = new \Slim\App($container);

require_once 'routes.php';
