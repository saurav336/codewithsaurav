<?php
declare(strict_types=1);


require_once __DIR__ . "/../vendor/autoload.php";
include_once __DIR__ . "/../public/helpers.php";

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define("VIEW_PATH", $root . 'views' . DIRECTORY_SEPARATOR);

require APP_PATH . "App.php";
require APP_PATH . 'helpers.php';

$files = getTransactionFile(FILES_PATH);

$transactions = [];

foreach($files as $file){
    $transactions = array_merge($transactions, getTransactions($file, 'extractTransactions'));
}


$totals = calculateTotals($transactions);
require VIEW_PATH . "transactions.php";