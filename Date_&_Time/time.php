<!-- H - 24-hour format of an hour (00 to 23)
h - 12-hour format of an hour with leading zeros (01 to 12)
i - Minutes with leading zeros (00 to 59)
s - Seconds with leading zeros (00 to 59)
a - Lowercase Ante meridiem and Post meridiem (am or pm) -->

<?php
    date_default_timezone_set("Asia/Colombo");  //time zone
    echo "the time is " .date("h:i:sa");
?>