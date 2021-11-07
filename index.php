<?php

require_once('libs/header.php');

$page = array(
	'template' => 'index',
	'vars' => [
		'page_title' => 'Home',
		'ascii_karlsen' => file_get_contents('ressources/ascii_art/karlsen.fr.ascii'),
		'base64_email' => base64_encode('ressources/keys/sebastian@karlsen.fr.asc')
	]
);

require_once('libs/footer.php');

?>
