<?php
namespace PrototypePattern;


abstract class EmployeePrototype
{
    public $id;
    public $name;

    public $address;


    abstract function shallowClone();
    abstract function deepClone();

}