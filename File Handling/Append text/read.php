<?php
    $myfile2 = fopen("doc.txt", "r") or die("Unable to Open");
    while(!feof($myfile2)) {
        echo fgets($myfile2) . "<br>";
    }
    fclose($myfile2);
?>