<?php 

// Composer dependencies
require_once '../vendor/autoload.php';

$container = new \Slim\Container;
// Adding items to container
$container['config'] = function($c) {
	return new \Noodlehaus\Config(['../config/app.php']);
};

$container['view'] = function($c) {
	$view = new \Slim\Views\Twig('../resources/views');
	$view->addExtension(new \Slim\Views\TwigExtension(
			$c['router'],
			$c['config']->get('url')
		));
	return $view;
};

// Create new App instance
$app = new \Slim\App($container);

require_once 'routes.php';
