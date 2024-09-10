<?php
    echo "Use a case-insensitive regular expression to replace Microsoft with W3Schools in a string:<br>";

    $str = "Visit Microsoft!";
    $pattern = "/microsoft/i";

    echo "Original String - $str <br>";
    echo "Replaced string - ";
    echo preg_replace($pattern, "PornHub", $str); 
?>