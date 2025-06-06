<?php

namespace App;

class CollectionAgency implements DebtCollector
{
    public function collect(float $owedamount)
    {
        $guareenteedAmount = $owedamount * 0.5;
        return mt_rand($guareenteedAmount, $owedamount);
    }
}