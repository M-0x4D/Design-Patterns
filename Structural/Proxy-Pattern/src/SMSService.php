<?php
namespace Proxy;

abstract class SMSService
{
    abstract function sendSMS($custId , $mobile ,$message);
}