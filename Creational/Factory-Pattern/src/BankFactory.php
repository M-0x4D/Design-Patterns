<?php

namespace Factory;

class BankFactory implements  IFactory
{
    function getBank($bankCode)
    {
        switch ($bankCode) {
            case '123456':
                return new BankA;
                break;
            case '111111':
                return new BankB;
                break;
            
            default:
                # code...
                break;
        }
        return 'the number does not supported';
    }
}