<?php
    class Fruit {
        public $name;
        public $color;

        function __construct($name) {
            $this->name = $name; 
        }
        function __destruct() {
            echo "The fruit is {$this->name}."; 
        }
    }

    $apple = new Fruit("Apple");
?>

<!-- Tip: As constructors and destructors helps reducing the amount of code, they are very useful! -->