<?php

namespace Builder;
interface IBuilder
{
    function setUpOperations();
    function buildBody();
    function insertWheel();
    function addHeadLights();
    function endOperations();
    function getVehicle();

}