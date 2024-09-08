<?php
    // loop through the items of an indexed array
    echo "Loop through an intended array<br><br>";
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $x) {
    echo "$x <br>";
    }

    echo "<br><br>";

    // loop through and associative array
    echo "Print both the key and the value from the members array:<br>";
    $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach ($members as $x => $y) {
    echo "$x : $y <br>";
    }
?>