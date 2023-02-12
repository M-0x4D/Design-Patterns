<?php

require_once __DIR__ . "/src/IBuilder.php";
require_once __DIR__ . "/src/Director.php";
require_once __DIR__ . "/src/MotorCycle.php";
require_once __DIR__ . "/src/Car.php";
require_once __DIR__ . "/src/Product.php";
use Builder\Director;
use Builder\Car;
use Builder\MotorCycle;

class Index 
{
    static function Main()
    {
        echo "======================= Builder Pattern =========================<br>";
        $director = new Director();
        $carBuilder = new Car('jeeb');
        $motorBuilder = new MotorCycle('chinees');

        // making car
        $director->construct($carBuilder);
        $carBuilder->getVehicle();
        var_dump($carBuilder);
        echo  "<br>";



        // making motor
        $director->construct($motorBuilder);
        $motorBuilder->getVehicle();
        print_r($motorBuilder);
        echo  "<br>";
    }
}

Index::Main();