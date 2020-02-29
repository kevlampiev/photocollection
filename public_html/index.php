<?php

require_once __DIR__ . "/../settings/config.php";

require_once __DIR__ . "/../engine/getdata.php";

//linux version
// require_once "/var/www/twig/vendor/autoload.php";

//windows version
//require_once "/OSPanel/vendor/twig/twig/lib/Twig/autoloader.php";

//Twig_Autoloader::register();

try {
	// $loader = new Twig_Loader_Filesystem(__DIR__ . '/../views');
	// $twig = new Twig_Environment($loader);

	// $template = $twig->loadTemplate('main.tmpl');

	echo $twig->render('main.tmpl', ['title' => 'photo-statton', 'imgList' => getImgList()]);
} catch (Exception $e) {
	die("Error: " . $e->getMessage());
}
