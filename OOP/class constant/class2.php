<?php
    class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting my git hub profile";
    public function byebye() {
        echo self::LEAVING_MESSAGE;
    }
    }

    $goodbye = new Goodbye();
    $goodbye->byebye();
?>