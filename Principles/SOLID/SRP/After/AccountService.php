<?php

namespace SOLID\SOLID\SRP\After;

use DateTime;

class AccountService
{
    public function Deposit(Account $account, float $amount)
    {
        $transactionMessage = "";
        if ($amount > 0) {
            $account->balance += $amount;

            $transactionMessage =
                "OK Deposit " . number_format($amount, 2, '.', ',') .
                ", current balance " . number_format($account->balance, 2, '.', ',');
        }

        $emailService = new EmailClient();
        $emailService->Send($account, $transactionMessage, new DateTime());
    }

    public function WithDraw(Account $account, $amount)
    {
        $transactionMessage = "";

        if ($account->balance < abs($amount)) {
            $transactionMessage =
                "OVERDRAFT when trying to withdraw " .
                number_format(abs($amount), 2, '.', ',') . ", " .
                "current balance " . number_format($account->balance, 2, '.', ',');
        } else {
            $account->balance -= $amount;
            $transactionMessage =
                "OK Withdraw " . number_format(abs($amount), 2, '.', ',') .
                ", current balance " . number_format($account->balance, 2, '.', ',');

        }


        $emailService = new EmailClient();
        $emailService->Send($account, $transactionMessage, new DateTime());
    }
}