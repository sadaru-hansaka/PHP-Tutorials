<?php
    // encode associative array to a JSON object
    $age = array("Peter"=>35,"Ben"=>40,"Joe"=>24,);

    // The json_encode() function is used to encode a value to JSON format.
    echo json_encode($age);

    echo "<br><br>";

    // ----------------------------------------------------------------------------------

    // encode indexed array into json array
    $cars = array("BMW","Toyota","Audi");

    echo json_encode($cars);
?>