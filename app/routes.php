<?php

$app->get('/', function($req, $res, $args) {
	$this->view->render($res, 'home.twig');
});