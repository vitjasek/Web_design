<?php
include './twig_init.php';


$tpl_items = array();
$tpl_items['title'] = 'Zadní náprava';
$twig = twig_init();
$tpl  = $twig->loadTemplate('zadni_naprava.twig');
echo $tpl->render($tpl_items);
?>
