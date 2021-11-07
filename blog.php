<?php

require_once('libs/header.php');
require_once('libs/db.php');

$articles = $pdo->prepare('
	SELECT 
		id, 
		published, 
		title,
		text 
	FROM 
		articles 
	WHERE 
		public = 1 
	ORDER BY
		id DESC
');
$articles->execute();

$page = array(
	'template' => 'blog',
	'vars' => [
		'page_title' => 'Blog',
		'articles' => $articles->fetchAll(PDO::FETCH_ASSOC)
	]
);

require_once('libs/footer.php');

?>
