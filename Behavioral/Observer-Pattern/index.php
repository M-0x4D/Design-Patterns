<?php
require_once __DIR__ . "/vendor/autoload.php";

use Observer\Resturant;
use Observer\Cashier;
use Observer\Waiter;
use Observer\Kitchen;

class Order
{
    private $resturant;
    private $cashier;
    private $waiter;
    private $kitchen;
    function setUp()
    {
        echo 'welcome' . "<pre>";
        $this->resturant = new Resturant;
        $this->waiter = new Waiter;
        $this->cashier = new Cashier;
        $this->kitchen = new Kitchen;


        $this->resturant->attach($this->cashier);
        $this->resturant->attach($this->waiter);
        $this->resturant->attach($this->kitchen);
    }

    function notifyObservers()
    {
        $this->resturant->add_new_order();
        echo  $this->cashier->get_state() . "<pre>";
        echo  $this->kitchen->get_state() . "<pre>";
        echo $this->waiter->get_state() . "<pre>";
    }
}

$order = new Order;
$order->setUp();
$order->notifyObservers();
