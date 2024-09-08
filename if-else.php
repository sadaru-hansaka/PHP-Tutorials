<?php
    $t = 14;

    if ( $t < 20){
        echo "Have a Good day";
    }


    // Switch statement
    echo "<br><br>";
    echo "Switch Statement <br>";

    $favcolor = "red";

    switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
    }
?>