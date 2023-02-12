<?php

namespace Builder;
class Product 
{
    public $parts = [];

    function __construct()
    {

    }



    function add($part)
    {
        $this->parts[] = $part;
        return $this;
    }


    function show()
    {
        return $this->parts;
    }
}