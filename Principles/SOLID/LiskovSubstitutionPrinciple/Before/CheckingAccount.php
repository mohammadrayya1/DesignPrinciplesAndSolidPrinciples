<?php

namespace SOLID\SOLID\LiskovSubstitutionPrinciple\Before;

class CheckingAccount extends Account
{

    public function __construct($name,$balance)
    {
        parent::__construct($name, $balance);

    }
    public function deposite($amount)
    {
        $this->balance += $amount;
    }

    public function withdraw($amount)
    {
        $this->balance -= $amount;
    }
}