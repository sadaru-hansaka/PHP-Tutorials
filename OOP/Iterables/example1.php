<?php
    function printIterable( iterable $myIterable){
        foreach($myIterable as $item){
            echo "$item<br>";
        };
    };

    $array = ["a", "b", "c", "d"];
    printIterable($array);
?>