<?php

namespace SOLID\SOLID\DIP\After;

class Notifications
{

    public readonly NotifyService $service;

    public function __construct(NotifyService $service)
    {
        $this->service = $service;

    }

    public function Notify()
    {
        $this->service->send();
    }


}