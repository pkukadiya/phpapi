<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "sepiy";

// Create connection
$conn = new mysqli($servername, $username, $password, $databasename);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
echo "connection successfully";
$db_selected = mysqli_select_db($conn,$databasename);

        if(!$db_selected)
        {
            die("can't selected".mysqli_error());
        }
        echo "selected";

?>