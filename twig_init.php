<?php
require_once('Twig/Autoloader.php');

function twig_init(){
Twig_Autoloader::register();
$tpl_dir = './templates';
$loader = new Twig_Loader_Filesystem($tpl_dir);
$twig = new Twig_Environment($loader, array(
  'cache' => false,
  'autoreload' => true,
  'autoescape' => true,
  'debug' => true
));
$twig->addExtension(new Twig_Extension_Debug());
return $twig;
}
?>