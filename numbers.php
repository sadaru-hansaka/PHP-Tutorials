<?php
    // Check if the type of a variable is integer:
    $x = 5985;
    var_dump(is_int($x));

    echo "<br><br>";

    $x = 59.85;
    var_dump(is_int($x));

    echo "<br><br>";

    // Check if the type of a variable is float:
    $x = 10.365;
    var_dump(is_float($x));

    echo "<br><br>";
    echo "----------------------------------------------------------<br>";
    // Check if the variable is numeric:
    $x = 5985;
    var_dump(is_numeric($x));

    $x = "5985";
    var_dump(is_numeric($x));
    $x = "59.85" + 100;
    var_dump(is_numeric($x));

    $x = "Hello";
    var_dump(is_numeric($x));

    echo "<br><br>";
    echo "----------------------------------------------------------<br>";

    // Cast float to int
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;

    echo "<br>";

    // Cast string to int
    $x = "23465.768";
    $int_cast = (int)$x;
    echo $int_cast;
?>