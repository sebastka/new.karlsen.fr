<?php

$page['vars']['site_title'] = $config['site']['site_title'];

echo $twig->render($page['template'] . '.html', $page['vars']);

?>