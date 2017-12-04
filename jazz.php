<?php
include './twig_init.php';


$tpl_items = array();
$tpl_items['title'] = 'Jazzová';
$tpl_items['jazz'] = TRUE;
$twig = twig_init();
$tpl  = $twig->loadTemplate('jazz.twig');
echo $tpl->render($tpl_items);
?>
