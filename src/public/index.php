<?php

declare(strict_types=1);

require __DIR__ . "/../vendor/autoload.php";

use App\Router;

$router = new Router();
$router->register("/", [App\Controller\HomeController::class, 'index']);

$router->reslove($_SERVER["REQUEST_URI"]);