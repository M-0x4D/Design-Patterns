<?php
namespace Proxy;
class ConcreteSMSService extends SMSService
{
function sendSMS($custId , $mobile ,$message )
{
        echo "customer id : $custId sms sent to $mobile";

}
}