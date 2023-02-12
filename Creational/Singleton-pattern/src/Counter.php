<?php
namespace singleton;

// require_once __DIR__."/../vendor/autoload.php";
class Counter
{
    private $count = 0;
    private static ?Counter $instanse = null;

    private function __construct()
    {
        
    }
    function increase_count()
    {
        $this->count++;
    }

    static function get_instatnce()
    {
        if (self::$instanse == null) self::$instanse = new static;
        return self::$instanse;
    }

    function get_count()
    {
        return $this->count;
    }
}