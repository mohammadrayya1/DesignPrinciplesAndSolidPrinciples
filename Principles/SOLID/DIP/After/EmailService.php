<?php

namespace SOLID\SOLID\DIP\After;

class EmailService implements NotifyService
{

    public $email;

    /**
     * @param $email
     */
    public function __construct($email)
    {
        $this->email = $email;
    }


    public function send()
    {
       echo "The $this->email is sent";
    }
}