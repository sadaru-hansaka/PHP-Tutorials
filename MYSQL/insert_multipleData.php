<?php
    $db_server = "localhost";
    $db_password = "";
    $db_username = "root";
    $db_name = "myDB";

    $conn = new mysqli($db_server,$db_username,$db_password,$db_name);

    if($conn){
        echo "data base connected<br>";
    }else{
        echo "oops not connected<br>";
    }

    // data
    $sql = "INSERT INTO MyGuest (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    $sql = "INSERT INTO MyGuest (firstname, lastname, email)
    VALUES ('Mary', 'Moe', 'mary@example.com');";
    $sql = "INSERT INTO MyGuest (firstname, lastname, email)
    VALUES ('Julie', 'Dooley', 'julie@example.com')";
    // -------------------------------------------------------------------

    if ($conn->multi_query($sql) === TRUE) {
        echo "New record created successfully";
        // get the last inserted record
        $last_id = $conn->insert_id;
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>