<!DOCTYPE html>
<html>
    <head>
        <style>
        table {
        width: 100%;
        border-collapse: collapse;
        }

        table, td, th {
        border: 1px solid black;
        padding: 5px;
        }

        th {text-align: left;}
        </style>
    </head>
    <body>

        <?php
            $q = intval($_GET['q']);

            $db_server = "localhost";
            $db_password = "";
            $db_username = "root";
            $db_name = "ajax_demo";

            $con = new mysqli($db_server,$db_username,$db_password,$db_name);

            if($con){
                echo "data base connected<br>";
            }else{
                echo "oops not connected<br>";
            }

            mysqli_select_db($con,"ajax_demo");
            $sql="SELECT * FROM User WHERE id = '".$q."'";
            $result = mysqli_query($con,$sql);

            echo "<table>
            <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Age</th>
            <th>Hometown</th>
            <th>Job</th>
            </tr>";
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['firstname'] . "</td>";
                echo "<td>" . $row['lastname'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['hometown'] . "</td>";
                echo "<td>" . $row['job'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_close($con);
                   
        ?>
    </body>
</html>