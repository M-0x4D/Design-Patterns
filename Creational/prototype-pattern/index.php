<?php


require_once __DIR__ . "/src/EmployeePrototype.php";
require_once __DIR__ . "/src/RegEmployee.php";

use PrototypePattern\RegEmployee;

class Index
{
    static function shallow()
    {
        $emp_1 = new RegEmployee();
        $emp_1->name = 'test';
        $emp_1->address = 'fake';
        $emp_2 = $emp_1->shallowClone();
        $emp_2->name = 'test2222';
        echo "================= emp 1 original =========================<br>";
        var_dump($emp_1);
        echo "<br>";
        var_dump($emp_2);
        echo "<br>";
    }
    static function deep()
    {
        $emp_1 = new RegEmployee();
        $emp_1->name = 'test';
        $emp_1->address = 'fake';
        $emp_2 = $emp_1->deepClone();
        $emp_2->name = 'test2222';
        echo "<br>================= emp 1 original =========================<br>";
        var_dump($emp_1);
        echo "<br>";
        var_dump($emp_2);
        echo "<br>";
    }
}


Index::shallow();
Index::deep();