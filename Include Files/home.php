<html>
    <body>

        <h1>Welcome to my home page!</h1>

        <!-- ---------------------------------------------------include---------------------------------------------- -->
        <!-- include menu.php file -->
        <?php include 'menu.php'; ?>

        <p>Some text.</p>
        <p>Some more text.</p>
        <!-- To include the footer file in a page, use the include statement: -->
        <?php include 'footer.php';?> 

        <!-- ------------------------------------------------------Require---------------------------------------------- -->

        <?php require 'dumb.php'; 
        echo "I have a $color one";
        ?>

    <!-- Use require when the file is required by the application.

    Use include when the file is not required and application should continue when file is not found. -->

    </body>
</html>