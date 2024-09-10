<?php
    $str = "The rain in SPAIN falls mainly on the plains.";
    $pattern = "/ain/i";

    echo "Use a regular expression to do a case-insensitive count of the number of occurrences of 'ain' in a string:<br>";
    echo "String - The rain in SPAIN falls mainly on the plains.<br>";
    echo "Number of 'ain's = ";

    // RegEx
    echo preg_match_all($pattern, $str); // Outputs 4
?>