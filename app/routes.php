<?php

$app->get('/', function($req, $res, $args) {
	var_dump($this->db->query("SELECT 1")->fetch(PDO::FETCH_OBJ));
	$this->view->render($res, 'home.twig');
});