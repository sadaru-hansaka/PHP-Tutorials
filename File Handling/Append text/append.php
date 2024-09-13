<?php
    $myfile = fopen("doc.txt", "a") or die("Unable to Open");
    $txt = "Sanduni Hansamali\n";
    fwrite($myfile, $txt);
    fclose($myfile);

?>