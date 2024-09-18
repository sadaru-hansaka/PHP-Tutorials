<?php
    class Fruit {
        // Properties
        public $name;
        public $color;

        // Methods
        function set_name($name) {            //The $this keyword refers to the current object, and is only available inside methods.
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }
        function set_color($color){
            $this->color = $color;
        }
        function get_color(){
            return $this->color;
        }
    }

    $apple = new Fruit();
    $banana = new Fruit();

    // set name
    $apple->set_name('Apple');
    $banana->set_name('Banana');

    // get name
    echo $apple->get_name();
    echo "<br>";

    $apple->set_color('Red');
    echo $apple->get_color();
?>

<!-- Note: In a class, variables are called properties and functions are called methods! -->