<?php

namespace SOLID\LooseVsTightCoupling\LooseCoupling;

use SOLID\LooseVsTightCoupling\LooseCoupling\INotificationServices;

class EmailService implements INotificationServices
{

    public function send()
    {
        echo "Service of Email";

    }
}