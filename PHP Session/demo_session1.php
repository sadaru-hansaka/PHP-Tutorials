<?php
    // start session
    session_start();
?>

<html>
    <body>
        <?php
            // Set session
            $_SESSION["favcolor"] = "green";
            $_SESSION["favanimal"] = "cat";
            echo "Session variables are set";
        ?>
    </body>
</html>