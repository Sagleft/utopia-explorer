<?php
	session_start();
	require_once __DIR__ . "/../vendor/autoload.php";
	
	$handler = new \App\Controller\Handler();
	$handler->utopia_unit();
	
	$handler->render([
		'tag'   => 'tr',
		'title' => 'Transactions',
		'user'  => $handler->user->data,
		'tr'  => $handler->get_transactions(),
		'data' => [
			'summary' => $handler->get_summary()
		]
	]);
	