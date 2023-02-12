<?php

require_once __DIR__ . "/vendor/autoload.php";
use Proxy\Proxy;

$proxy = new Proxy;
$proxy->sendSMS(999 , 01004677123 , 'heloo mr mohamed');