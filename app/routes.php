<?php

$app->get('/', function($req, $res, $args) {
	echo $this->config->get('db.mysql.host');
	//var_dump($this);
	// $this->view->render($res, 'home.twig');
});