<?php 

// concreate builder 

namespace Builder;
use Builder\Product;
use Builder\IBuilder;
class Car  implements IBuilder
{
    public Product $product;
    public $brandName;

    function __construct($brand)
    {
        $this->product = new Product;
        $this->brandName = $brand;
    }

    function setUpOperations()
    {
        $this->product->add($this->brandName);
    }
    function buildBody()
    {
        $this->product->add('');
    }
    function insertWheel()
    {
        $this->product->add('');

    }
    function addHeadLights()
    {
        $this->product->add('');

    }
    function endOperations()
    {
        $this->product->add('');

    }
    function getVehicle()
    {
        $this->product->show();
    }

    
}