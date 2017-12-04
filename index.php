<?php
include './twig_init.php';


$tpl_items = array();
$tpl_items['title'] = 'GuitarWiki';
$tpl_items['index'] = TRUE;
$twig = twig_init();
$tpl  = $twig->loadTemplate('index.twig');
echo $tpl->render($tpl_items);
?>
