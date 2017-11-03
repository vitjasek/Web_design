<?php
include './twig_init.php';


$tpl_items = array();
$tpl_items['title'] = 'Motor';
$twig = twig_init();
$tpl  = $twig->loadTemplate('motor.twig');
echo $tpl->render($tpl_items);
?>
