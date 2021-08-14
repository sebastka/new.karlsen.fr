<?php

require_once('vendor/autoload.php');

$loader = new \Twig\Loader\FilesystemLoader('template/');
$twig = new \Twig\Environment($loader,
//	[ 'cache' => 'cache/' ]
);

echo $twig->render('index.html',
	[
		'ascii_karlsen' => file_get_contents('ressources/ascii_art/karlsen.fr.ascii'),
		'base64_email' => base64_encode('ressources/keys/sebastian@karlsen.fr.asc')
	]
);

?>
