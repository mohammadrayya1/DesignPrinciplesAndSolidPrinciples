<?php

namespace SOLID\SOLID\LiskovSubstitutionPrinciple\After;

class FixedDepositAccount extends  Account
{

    public function deposite($amount)
    {
        $this->balance += $amount;
    }


}