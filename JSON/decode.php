<!-- The json_decode() function is used to decode a JSON object into a PHP object or an associative array. -->

<?php
    $json_obj = '{"Peter":33,"Sanda":19,"Joe":28}';

    var_dump(json_decode($json_obj));

    echo "<br><br>";

    // The json_decode() function returns an object by default. The json_decode() function has a second parameter, 
    // and when set to true, JSON objects are decoded into associative arrays.

    // decodes JSON data into a PHP associative array

    $object = '{"Peter":35,"BEn":47,"Joe":87}';

    var_dump(json_decode($object, true));

?>