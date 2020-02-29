<?php

define('SITE_ROOT', dirname(__DIR__) . '/');


require_once __DIR__ . "/../vendor/autoload.php";

try {
    $loader = new \Twig\Loader\FilesystemLoader('../views');
    $twig = new \Twig\Environment($loader);
} catch (Exception $e) {
    die("Error: {$e->getMessage()}");
}
