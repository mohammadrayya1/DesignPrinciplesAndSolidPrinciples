<?php

namespace SOLID\SOLID\DIP\After;

class SmsService implements NotifyService
{
    public $mobileNumber;

    /**
     * @param $mobileNumber
     */
    public function __construct($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
    }

    public function send()
    {
        echo "The Message to $this->mobileNumber is sent";
    }
}