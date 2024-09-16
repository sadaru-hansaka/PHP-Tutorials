<?php
    // access values from a PHP object
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $obj = json_decode($jsonobj);

    echo "$obj->Peter<br>";
    echo "$obj->Ben<br>";
    echo "$obj->Joe<br>";

    echo "<br><br>";
    // -------------------------------------------------------------------
    // access the values from a PHP associative array

    $jsonobj2 = '{"Peter":35,"Ben":37,"Joe":43}';

    $arr = json_decode($jsonobj2, true);

    echo $arr["Peter"];
    echo $arr["Ben"];
    echo $arr["Joe"];
?>