<?php
    class greeting {
        public static function welcome(){
            echo "hello world!";
        }

        public function __construct(){
            self :: welcome();
        }

    }

    new greeting();
?>