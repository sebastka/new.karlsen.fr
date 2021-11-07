<?php

$pdo = new PDO(
	'mysql:host=' . $config['db']['server'] . ';dbname=' . $config['db']['name'],
	$config['db']['user'],
	$config['db']['password']
);

?>
