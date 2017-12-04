<?php
include './twig_init.php';


$tpl_items = array();
$tpl_items['title'] = 'Akustická kytara';
$tpl_items['acustic'] = TRUE;
$twig = twig_init();
$tpl  = $twig->loadTemplate('acustic.twig');
echo $tpl->render($tpl_items);
?>
