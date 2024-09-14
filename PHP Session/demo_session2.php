<?php
    session_start();
?>

<html>
    <body>
        <?php
            echo "Favorite color is " .$_SESSION["favcolor"] . "<br>";
            echo "Favorite animal is " .$_SESSION["favanimal"] . "<br>";

            // remove all session variables
            session_unset();

            // destroy the session
            session_destroy();

        ?>
    </body>
</html>