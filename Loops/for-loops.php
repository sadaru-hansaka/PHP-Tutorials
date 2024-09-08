<?php
    // for loop with break
    echo "for loop with break statement<br><br>";
    for ($x = 0; $x <= 10; $x++) {
        if ($x == 3) break;
        echo "The number is: $x <br>";
    }

    echo "<br><br>";
    // for loop with continue
    echo "for loop with continue statement<br><br>";
    for ($x = 0; $x <= 10; $x++) {
        if ($x == 3) continue;
        echo "The number is: $x <br>";
      }
?>