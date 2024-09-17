<?php

namespace SOLID\SOLID\LiskovSubstitutionPrinciple\After;

class CheckingAccount extends RegularAccount
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