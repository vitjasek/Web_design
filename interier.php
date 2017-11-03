<?php
include './twig_init.php';


$tpl_items = array();
$tpl_items['title'] = 'Interiér';
$twig = twig_init();
$tpl  = $twig->loadTemplate('interier.twig');
echo $tpl->render($tpl_items);
?>
