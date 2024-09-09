<?php
    $cars = array (
        array("Volvo",12,30),
        array("BMW",100,234),
        array("Toyota",128,57),
    );

    // print one row
    echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";

    echo "<br><br>";
    echo "----------------------------------------------------------------------------";
    for ($row = 0; $row < 3; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
          echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
      }

?>