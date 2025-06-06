<?php
// declare(strict_types=1);
use App\Controller\HomeController;
use App\Router;



require_once __DIR__ . "/helper.php";
require_once __DIR__ . "/../vendor/autoload.php";

date_default_timezone_set("Asia/Kathmandu");

function errorHandler(int $type, string $message, ?string $file = null, ?int $line = null)
{
    echo "Type of Error is " . $type . " and the message is " . $message . " in file " . $file . " on line No. " . $line . '<br/>';
}
set_error_handler("errorHandler", E_ALL);

// $router = new Router();
// $router->register('/', [HomeController::class, 'index']);

// $router->resolve($_SERVER['REQUEST_URI']);

$agency = new App\DebtCollectionAgency();
echo $agency->collectDebt(new App\Rocky) . PHP_EOL;

echo date_default_timezone_get() . PHP_EOL;