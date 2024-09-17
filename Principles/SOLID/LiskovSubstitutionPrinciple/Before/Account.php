<?php

namespace SOLID\SOLID\LiskovSubstitutionPrinciple\Before;

abstract class Account
{
    public $name;
    public $balance;

    /**
     * @param $name
     * @param $balance
     */
    public function __construct($name = null, $balance = null)
    {
        if ($name !== null && $balance !== null) {
            $this->name = $name;
            $this->balance = $balance;
        } else {

        }
    }


    abstract public function deposite($amount);


    abstract public function withdraw($amount);


}