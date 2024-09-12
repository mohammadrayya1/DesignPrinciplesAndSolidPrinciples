<?php

namespace SOLID\LooseVsTightCoupling\LooseCoupling;

use SOLID\LooseVsTightCoupling\LooseCoupling\INotificationServices;

class SmsService implements INotificationServices
{
    public function send()
    {
        echo "Service of SMS";

    }

}