<!-- The PHP strtotime() function is used to convert a human readable date string into a Unix timestamp 
 (the number of seconds since January 1 1970 00:00:00 GMT). -->

<?php
    $d=strtotime("10:30pm April 15 2014");
    echo "Created date is " . date("Y-m-d h:i:sa", $d);

    echo "<br><br>";
    
    $d=strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br><br>";

    $d=strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";
?>