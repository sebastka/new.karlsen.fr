<?php

require_once('vendor/autoload.php');
require_once('libs/config.php');

$loader = new \Twig\Loader\FilesystemLoader('template/');
$twig = new \Twig\Environment($loader,
//	[ 'cache' => 'cache/' ]
);

?>