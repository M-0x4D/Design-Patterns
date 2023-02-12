<?php 

namespace Factory;

class BankA implements  IBank
{
    function withdraw()
    {
        echo 'your request handled by BankA';

    }
}