<!-- PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form. -->

<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name : <input type="text" name="fname">
            <input type= "submit" >
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"]== "POST"){
                // collect values of inputs
                $name = $_REQUEST['fname'];
                if(empty($name)){
                    echo "Name is empty";
                }else{
                    echo $name;
                }
            }
        ?>

    </body>
</html>