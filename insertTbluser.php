<?php

include 'database.php';

$name= "test";
$uname = "demo";
$pass = "pass";
$email = "email@gmail.com";
$contact="1235647980";
$register_date="12/03/2018";
$activaion_key="123ABC";
$user_type="reg";



$sql = "INSERT INTO tbluser (`name`,`uname`,`pass`,`email`,`contact`,`register_date`,`activaion_key`,`user_type`)VALUES ('".$name."','".$uname."','".$pass."','".$email."',$contact,'".$register_date."','".$activaion_key."','".$user_type."')";

if (mysqli_query($conn, $sql)) {
    $response['meta'] = array('status' => 'ok', 'message' => 'New record created successfully');
} 
else {
    $response['meta'] = array('status' => 'fail', 'message' => mysqli_error($conn));
}

echo json_encode($response);

?>