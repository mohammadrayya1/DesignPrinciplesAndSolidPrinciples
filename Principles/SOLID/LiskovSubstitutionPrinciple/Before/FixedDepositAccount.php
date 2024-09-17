<?php

namespace SOLID\SOLID\LiskovSubstitutionPrinciple\Before;

class FixedDepositAccount extends  Account
{

    public function deposite($amount)
    {
        $this->balance += $amount;
    }

    public function withdraw($amount)
    {
        echo "You can not withdraw process";
    }
}