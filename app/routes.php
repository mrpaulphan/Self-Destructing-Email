<?php

$app->get('/', function($req, $res, $args) {
	echo $this->config->get('db.mysql.host');
	$this->view->render($res, 'home.twig');
});