<?php
    echo ("Create a constant with a case-sensitive name:<br>");
    define("GREETING", "Welcome to W3Schools.com!");
    echo GREETING;
    echo "<br><br>";

    // use const key word
    echo ("Create a constant with the const keyword:<br>");
    const MYCAR = "Volvo";
    echo MYCAR;

    echo "<br><br>";

    // constant array
    echo ("Create an Array constant:<br>");
    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
      ]);
    echo cars[0];
    echo "<br>";
    echo cars[1];
?>