<?php
$myfile = fopen("webdic.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdic.txt"));
fclose($myfile);
echo "<br><br>";
?>


