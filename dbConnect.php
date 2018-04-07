<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "sepiy";

// Create connection
$con = new mysqli($servername, $username, $password, $databasename);

if ($con->connect_error) 
{
    die("Connection failed: " . $con->connect_error);
} 
echo "succesfully";

$db_selected = mysqli_select_db($con,$databasename);

        if(!$db_selected)
        {
            die("can't selected".mysqli_error());
        }
        echo "selected";

?>