<?php
require __DIR__ . '/vendor/autoload.php';

use App\Controller\MainController;
use App\Controller\AdminController;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$routes = [
    '/admin' => AdminController::class,
    '/' => MainController::class
];

$match = false;

foreach ($routes as $route => $controllerToUse) {

    if ($_SERVER['REQUEST_URI'] == $route) {
        $controller = new $controllerToUse();
        $controller->browse();
        $match = true;
        break;
    }
}

if (!$match) {
    $controller = new MainController();
    $controller->error404();
}


