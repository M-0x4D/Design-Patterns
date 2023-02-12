<?php

require_once __DIR__ . "/vendor/autoload.php";
use Factory\BankFactory;

// get from user
$bankCode = '123456';

$factory = new BankFactory;
$bank = $factory->getBank($bankCode);

$bank->withdraw();