<?php
include './twig_init.php';


$tpl_items = array();
$tpl_items['title'] = 'Elektrická kytara';
$tpl_items['electric'] = TRUE;
$twig = twig_init();
$tpl  = $twig->loadTemplate('electric.twig');
echo $tpl->render($tpl_items);
?>
