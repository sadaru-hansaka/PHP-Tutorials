<?php
    // do while loop
    echo "Do while loop with break statemen<br>";
    $i = 1;

    do {
      if ($i == 3) break;
      echo $i;
      $i++;
    } while ($i < 6);
?>