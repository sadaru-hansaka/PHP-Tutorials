<?php
    // difference between double quotes and single quotes
    echo "Hello";
    echo "<br>";
    echo 'HELLO';


    echo "<br><br>";

    $x = "John";
    // Double quoted string literals perform operations for special characters:
    echo "Hello $x";
    echo "<br>";

    // Single quoted string literals returns the string as it is:
    echo 'Hello $x';

    echo "<br><br>";
    // String length
    echo "Length of the 'Hello world!' string :";
    echo strlen("Hello world!");

    echo "<br><br>";
    // word count function
    echo "Word count = ";
    echo str_word_count("Sadaru Hansaka");

    echo "<br><br>";
    // search for text within a string (returns the character position)
    echo strpos("Hello world!", "world");

    echo "<br><br>";
    // Reverse the text
    echo strrev("Sadaru Hansaka");


?>