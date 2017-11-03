<?php
include './twig_init.php';


$tpl_items = array();
$tpl_items['title'] = 'Karoserie';
$twig = twig_init();
$tpl  = $twig->loadTemplate('karoserie.twig');
echo $tpl->render($tpl_items);
?>
