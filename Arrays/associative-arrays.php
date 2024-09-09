<?php
    $car = array("brand" => "Ford", "Model"=>"Mustang","year"=>1964);
    var_dump($car);

    // acces an array item using key name
    echo "<br><br>";
    echo $car["Model"];

    // change the values
    echo "<br><br>";
    echo "---------------------------------------------<br>";

    $car["year"] = 2024 ;
    var_dump($car);


    // disply all array items
    echo "<br><br>";
    echo "---------------------------------------------<br>";
    foreach ($car as $x => $y){
        echo "$x : $y <br>";
    }
?>