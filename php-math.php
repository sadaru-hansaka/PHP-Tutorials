<?php
    // min max
    echo ("The min() and max() functions can be used to find the lowest or highest value in a list of arguments:<br>");
    echo("Min of 0, 150, 30, 20, -8, -200 : ");
    echo(min(0, 150, 30, 20, -8, -200));
    echo "<br>";
    echo ("Max of 0, 150, 30, 20, -8, -200 :");
    echo(max(0, 150, 30, 20, -8, -200));

    // returns positive intigers
    echo "<br><br>";
    echo ("The abs() function returns the absolute (positive) value of a number:");
    echo "<br>";
    echo(abs(-6.7));

    // square root
    echo "<br><br>";
    echo ("The sqrt() function returns the square root of a number: ");
    echo "<br>";
    echo(sqrt(64));

    echo "<br><br>";
    // round() function
    echo ("The round() function rounds a floating-point number to its nearest integer:<br>");
    echo(round(0.60));
    echo "<br>";
    echo(round(0.49));

    echo "<br><br>";
    // random numbers
    echo ("The rand() function generates a random number:<br>");
    echo(rand(10,100));

?>