<?php

namespace SOLID\SOLID\SRP\After;

class Account
{

    public $name;
    public $email;
    public $balance;

    public function __construct($name, $email, $balance)
    {
        $this->name = $name;
        $this->email = $email;
        $this->balance = $balance;


    }
}