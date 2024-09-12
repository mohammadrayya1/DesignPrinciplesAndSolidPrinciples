<?php

namespace SOLID\SOLID\SRP\After;

use DateTime;

class EmailClient
{

    public function Send(Account $account, string $transactionMessage, DateTime $transactionDate)
        {
            echo "<br><br>"."\t\t To: " . $account->email .
                "<br><br>"."Subject: Fake Bank Account Activity" .
                "<br><br>"."Dear " .$account->name . "," .
                "<br><br>"." A recent activity on your account occurred at " . $transactionDate->format("Y-m-d h:i") .
                "<br><br>"." ===> " . $transactionMessage .
                "<br><br>"."Thank You,\n\t\t Fake Bank." .
                "<br><br>"."--------------------------- ";

        }
}