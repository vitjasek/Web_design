<?php
include './twig_init.php';


$tpl_items = array();
$tpl_items['title'] = 'Bluesová kytara';
$tpl_items['blues'] = TRUE;
$twig = twig_init();
$tpl  = $twig->loadTemplate('blues.twig');
echo $tpl->render($tpl_items);
?>
