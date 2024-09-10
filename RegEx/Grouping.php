<?php
    echo "Use grouping to search for the word 'banana' by looking for ba followed by two instances of na:<br>";
    $str = "Apples and bananas.";
    $pattern = "/ba(na){2}/i";

    echo "$str";

    echo preg_match($pattern, $str); // Outputs 1
?>