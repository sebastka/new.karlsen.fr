<?php

require_once('libs/header.php');
require_once('libs/db.php');

$id = (isset($_GET['id']) && !empty($_GET['id'])) ? $_GET['id'] : NULL;

$article = $pdo->prepare('
	SELECT	
		published, 
		public, 
		title,
		text 
	FROM 
		articles 
	WHERE 
		id = ?
');
$article->execute(array($id));
$article = $article->fetch(PDO::FETCH_ASSOC);

if ($article['public'] == 0)
	exit('Article unavailable');

$page = array(
	'template' => 'article',
	'vars' => [
		'page_title' => $article['title'],
		'article' => $article
	]
);

require_once('libs/footer.php');

?>
