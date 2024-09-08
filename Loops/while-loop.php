<?php
    // while loop with continue
    echo "While loop with continue<br>";
    $i = 0;
    while ($i < 6){
        $i++ ;
        if ($i == 3) continue;
        echo "$i<br>";
    }

    echo "<br><br>";

    // while loop with break 
    echo "while loop eith break";
    $x = 0;
    while ($x<10){
        if($x == 5) break;
        $x++;
        echo "$x<br>";
    } 
?>