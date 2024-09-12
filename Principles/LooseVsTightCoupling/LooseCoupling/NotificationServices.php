<?php

namespace SOLID\LooseVsTightCoupling\LooseCoupling;

use SOLID\LooseVsTightCoupling\LooseCoupling\INotificationServices;

class NotificationServices
{

    private INotificationServices $iNotificationServices;


    public function __construct(INotificationServices $iNotificationServices)
    {
        $this->iNotificationServices = $iNotificationServices;


    }
    public function notify()
    {
        $this->iNotificationServices->send();

    }

}