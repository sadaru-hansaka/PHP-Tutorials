<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // update data record 
    $sql = "UPDATE MyGuest SET lastname='Sandaru' WHERE id=2";

    

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully<br>";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // select records from 1 to 3
    echo "<br><br>";
    $sql2 = "SELECT * FROM MyGuest LIMIT 3";
    $result = $conn->query($sql2);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo "ID:" .$row["id"] . "-Name: " .$row["firstname"]."<br>";
        }
    }
    // --------------------------------------------------------------------------------

    echo "<br><br>";
    // The SQL query below says "return only 2 records, start on record 3 (OFFSET 2)":

    $sql3 = "SELECT * FROM MyGuest LIMIT 2 OFFSET 2";
    $result2 = $conn->query($sql3);

    if($result2->num_rows>0){
        while($row=$result2->fetch_assoc()){
            echo "ID:" .$row["id"] . "-Name: " .$row["firstname"]."<br>";
        }
    }
    // ----------------------------------------------------------------------------------
    
    

    $conn->close();
?>