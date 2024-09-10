<?php
// preg_match()	Returns 1 if the pattern was found in the string and 0 if not
    $str = "Visit W3Schools";
    $pattern = "/w3schools/i";
    echo preg_match($pattern, $str); // Outputs 1
?>