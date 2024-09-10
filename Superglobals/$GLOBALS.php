<!-- $GLOBALS is a PHP super global variable which is used to access global 
 variables from anywhere in the PHP script (also from within functions or methods). -->

<?php
    $x = 5;
    $y = 10;

    function addition(){
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    addition();
    echo "$x + $y =  $z";
?>