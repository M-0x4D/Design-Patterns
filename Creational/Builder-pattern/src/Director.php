<?php
namespace Builder;

use Builder\IBuilder;

class Director
{
    public IBuilder $builder;

    function construct(IBuilder $builder)
    {
        $this->builder = $builder;
        $this->builder->setUpOperations();
        $this->builder->buildBody();
        $this->builder->insertWheel();
        $this->builder->addHeadLights();
        $this->builder->endOperations();
        $this->builder->getVehicle();
    }



}