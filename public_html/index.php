<?php

require_once 'lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache'       => 'compilation_cache',
    'auto_reload' => true
));

$info = array(
	array('name_client' => 'Иван Иванович', 'name_manager' => 'Наталья Воронина','
          post_ manager' => 'Менеджер по продажам', 'phone_manager' => '8-800-700-12-50','mail_manager' => 'voronina@intgroup.ru'));

echo $twig->render('main.html', array('info' => $info));