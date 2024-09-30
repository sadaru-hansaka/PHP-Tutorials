<?php
    $xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");

    // get node values of specific elements
    echo $xml->book[0]->title . "<br>";
    echo $xml->book[1]->title;

    echo "<br><br>";

    // get node values - loop
    foreach($xml->children() as $books) {
        echo $books->title . ", ";
        echo $books->author . ", ";
        echo $books->year . ", ";
        echo $books->price . "<br>";
    }

    echo "<br><br>";

    // get attribute values
    echo $xml->book[0]['category'] . "<br>";
    echo $xml->book[1]->title['lang'];


    echo "<br><br>";

    // get attributes value -loop
    foreach($xml->children() as $books) {
        echo $books->title['lang'];
        echo "<br>";
    }

?>
