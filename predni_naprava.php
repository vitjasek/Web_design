<?php
include './twig_init.php';


$tpl_items = array();
$tpl_items['title'] = 'Přední náprava';
$twig = twig_init();
$tpl  = $twig->loadTemplate('predni_naprava.twig');
echo $tpl->render($tpl_items);
?>
