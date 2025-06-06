<?php

namespace App;

class DebtCollectionAgency
{
    public function collectDebt(DebtCollector $collector)
    {
        var_dump($collector instanceof Rocky);
        $owedAmount = mt_rand((int) 100, (int) 1000);
        $collectedAmount = $collector->collect($owedAmount);

        echo "collected " . $collectedAmount . " out of " . $owedAmount;
    }

}