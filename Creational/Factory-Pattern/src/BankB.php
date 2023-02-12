<?php 

namespace Factory;

class BankB implements  IBank
{
    function withdraw()
    {
        echo 'your request handled by BankB';
        
    }
}