<?php

namespace SOLID\SOLID\SRP\Before;

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


    public function MakeTransaction($amount): void
    {
        $transactionMessage = "";

        if ($amount < 0) {
            if ($this->balance < abs($amount)) {
                $transactionMessage =
                    "OVERDRAFT when trying to withdraw " .
                    number_format(abs($amount), 2, '.', ',') . ", " .
                    "current balance " . number_format($this->balance, 2, '.', ',');
            } else {
                $transactionMessage =
                    "OK Withdraw " . number_format(abs($amount), 2, '.', ',') .
                    ", current balance " . number_format($this->balance, 2, '.', ',');

            }
        } elseif ($amount > 0) {

            $this->balance += $amount;

            $transactionMessage =
                "OK Deposit " . number_format($amount, 2, '.', ',') .
                ", current balance " . number_format($this->balance, 2, '.', ',');
        }


        echo "<br><br>" . "\t\t To: " . $this->email .
            "<br><br>" . "Subject: Fake Bank Account Activity" .
            "<br><br>" . "Dear " . $this->name . "," .
            "<br><br>" . " A recent activity on your account occurred at " . date("Y-m-d h:i") .
            "<br><br>" . " ===> " . $transactionMessage .
            "<br><br>" . "Thank You,\n\t\t Fake Bank." .
            "<br><br>" . "--------------------------- ";


    }

}