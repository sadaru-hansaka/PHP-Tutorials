<!-- d - Represents the day of the month (01 to 31)
m - Represents a month (01 to 12)
Y - Represents a year (in four digits)
l (lowercase 'L') - Represents the day of the week -->

<?php
    echo "Today is " .date("Y/m/d") . "<br>"; //2024/09/12
    echo "Today is " . date("Y.m.d") . "<br>"; //2024.09.12
    echo "Today is " . date("Y-m-d") . "<br>"; //2024-09-12
    echo "Today is " . date("l");   //Monday , Tuesdat, Wednesday ...

    echo "<br><br>";
?>

<html>
    <body>
        
        © 2010-<?php echo date("Y");?>

    </body>
</html>