<?php
    $db_server = "localhost";
    $db_password = "";
    $db_username = "root";
    $db_name = "myDB";

    $conn = new mysqli($db_server,$db_username,$db_password,$db_name);

    if($conn){
        echo "data base connected<br>";
    }else{
        echo "oops not connected>br>";
    }

    // create a table
    $sql = "CREATE TABLE MyGuest(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        -- UNSIGNED - Used for number types, limits the stored data to positive numbers and zero
        -- AUTO INCREMENT - MySQL automatically increases the value of the field by 1 each time a new record is added
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        -- DEFAULT value - Set a default value that is added when no other value is passed
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();
?>