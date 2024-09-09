<?php
    // sort array in ascending order
    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);
    var_dump($cars);

    echo "<br><br>";
    echo "--------------------------------------------------------------------<br>";

    // sort ascending numerical order
    $numbers = array(4, 6, 2, 22, 11);
    sort($numbers);
    foreach ($numbers as $x){
        echo "$x  ";
    };


    echo "<br><br>";
    echo "--------------------------------------------------------------------<br>";

    // Sort array descending order
    rsort($cars);
    foreach ($cars as $c){
        echo "$c ,  ";
    };


    echo "<br><br>";
    echo "--------------------------------------------------------------------<br>";

    // sort associative array ascending order according to Value
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    asort($age);

    foreach ($age as $n => $a){
        echo "$n : $a <br>";
    };

    echo "<br>";
    echo "--------------------------------------------------------------------<br>";


    // sort associative array ascending order according to key
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    ksort($age);

    foreach ($age as $n => $a){
        echo "$n : $a <br>";
    };


    echo "<br><br>";
    echo "--------------------------------------------------------------------<br>";

    // sort associative array descending order according to Value
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    arsort($age);

    foreach ($age as $n => $a){
        echo "$n : $a <br>";
    };

    echo "<br><br>";
    echo "--------------------------------------------------------------------<br>";

    // sort associative array descending order according to key
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    krsort($age);

    foreach ($age as $n => $a){
        echo "$n : $a <br>";
    };
?>