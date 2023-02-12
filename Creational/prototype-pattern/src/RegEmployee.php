<?php

namespace PrototypePattern;
use PrototypePattern\EmployeePrototype;

class RegEmployee extends EmployeePrototype
{
     function shallowClone()
    {
        return $this;
    }
     function deepClone()
    {
        return  clone $this;
    }
}