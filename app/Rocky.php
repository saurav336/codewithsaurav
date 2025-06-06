<?php

namespace App;

class Rocky implements DebtCollector
{
    public function collect(float $owedamount)
    {
        return $owedamount * 0.65;


    }
}
