<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
require_once __DIR__."/src/Counter.php";
use singleton\Counter;

    $instance1 = Counter::get_instatnce();
    $instance2 = Counter::get_instatnce();
    
    $instance1->increase_count();
    $instance2->increase_count();

    echo "counter 1 : " .$instance1->get_count() . "<br>";
    echo "counter 2 : " .$instance2->get_count(). "<br>";
echo "................................................................ <br>";
    $instance1->increase_count();
    echo "counter 1 : " .$instance1->get_count(). "<br>";
    echo "counter 2 : " .$instance2->get_count(). "<br>";
echo "................................................................ <br>";

    $instance1->increase_count();
    echo "counter 1 : " .$instance1->get_count(). "<br>";
    echo "counter 2 : " .$instance2->get_count(). "<br>";


    ?>
</body>
</html>