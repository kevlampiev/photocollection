<?php

// require_once __DIR__."/../vendor/twig/autoload.php";

require_once __DIR__."/../engine/getdata.php";
require_once "/var/www/twig/vendor/autoload.php";
Twig_Autoloader::register();

try {
	$loader=new Twig_Loader_Filesystem(__DIR__.'/../views');
	$twig=new Twig_Environment($loader);

	$template=$twig->loadTemplate('main.tmpl');

	echo $template->render(['title'=>'photo-statton', 'imgList'=>getImgList()]);


}
catch(Exception $e) {
   die("Error: ".$e->getMessage());
}
?>

