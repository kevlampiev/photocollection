<?php

require_once __DIR__."/../engine/getdata.php";
require_once "/var/www/twig/vendor/autoload.php";
Twig_Autoloader::register();

try {
    $id=(int)$_GET['id'];
    
    $item=(gettype($id)=='integer')?getImgById($id):[];
    
    try {
        $loader=new Twig_Loader_Filesystem(__DIR__.'/../views');
        $twig=new Twig_Environment($loader);
        if ($item===[]) {
            $template=$twig->loadTemplate('notfound.tmpl');
        	echo $template->render(['title'=>'photo-statton']);
        } else {
            $template=$twig->loadTemplate('details.tmpl');
        	echo $template->render(['title'=>'photo-statton','item'=>$item]);    
        }
    

    } catch(Exception $e) {
        die("Error: ".$e->getMessage());
    }
    
}
catch(Exception $err) {
    die("Error: ".$err->getMessage());
}

?>