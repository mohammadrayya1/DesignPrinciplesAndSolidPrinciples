<?php

namespace SOLID\LooseVsTightCoupling\TightCoupling;

class NotificationServices
{

    private readonly SmsService $smsService;
    private  readonly EmailService $emailService;

    public function __construct(SmsService $smsService,EmailService $emailService)
    {
        $this->emailService = $emailService;
        $this->smsService= $smsService;

    }
    public function notify()
    {
        $this->smsService->send();
        $this->emailService->send();

    }

}