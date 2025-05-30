<?php

declare(strict_types = 1);

function getTransactionFile(string $dirPath) : array{
    $files = [];

    foreach(scandir($dirPath) as $file){
        if(is_dir($file)){
            continue;
        }
        $files[] = $dirPath . $file;
    }

    return $files;
}

function getTransactions(string $fileName, ?callable $transactionHandler = null) : array{

    if(!file_exists($fileName)){
        trigger_error("FIle " . $fileName . "does Not exist", E_USER_ERROR);
    }

    $file = fopen($fileName,"r");

    fgetcsv($file, 1000, ",", '"', "\\");  
    $transactions = [];

    while (($transaction = fgetcsv($file, 1000, ",", '"', "\\")) !== FALSE) {
        if($transactionHandler !== null) {
            $transaction = $transactionHandler($transaction);
        }
        $transactions[] = $transaction;
    }
    return $transactions;
}

function extractTransactions(array $transactionRow) : array{
    [$date, $checkNumber, $description, $amount] = $transactionRow;

    $amount = (float) str_replace(['$', ','], '', $amount);
    return [
        'date' => $date,
        'checkNumber' => $checkNumber,
        'description' => $description,
        'amount' => $amount,
    ];
}

function calculateTotals(array $transactions): array{
    $totals = ['netTotal' => 0, 'totalIncome' => 0, 'totalExpense' => 0];
    foreach($transactions as $transaction) {
        $totals['netTotal'] += $transaction['amount'];

        if($transaction['amount'] >= 0){
            $totals['totalIncome'] += $transaction['amount'];
        }else{
            $totals['totalExpense'] += $transaction['amount'];
        }
    }

    return $totals;
}

