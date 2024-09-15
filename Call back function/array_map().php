<?php
// array_map() function to calculate the length of every string in an array:
    function my_callback($item) {
    return strlen($item);
    }

    $strings = ["apple", "orange", "banana", "coconut"];
    $lengths = array_map("my_callback", $strings);
    print_r($lengths);
?>