<?php
namespace Proxy;

use Proxy\ConcreteSMSService;
class Proxy
{
    public $smsService;
    function __construct()
    {
        $this->smsService = new ConcreteSMSService;

    }
    function sendSMS($custId , $mobile ,$message)
    {
        if($custId <= 100)
        {
            $this->smsService->sendSMS($custId , $mobile , $message);
        } else
            echo  'finished your service';
        
    }
}