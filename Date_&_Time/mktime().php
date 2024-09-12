<!-- The PHP mktime() function returns the Unix timestamp for a date. The Unix timestamp contains the number of seconds between the Unix Epoch 
 (January 1 1970 00:00:00 GMT) and the time specified. -->

<?php
    $d=mktime(11, 14, 54, 8, 12, 2014);
    echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>