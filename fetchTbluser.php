<?php

include 'dbConnect.php';
// Fetch Product List
$query = "SELECT * FROM tbluser";
$result = $con->query($query);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

        $data[] = $row;

    }

} else {

    $data = array();

}
//$response['meta'] = array('status' => 'ok', 'message' => 'record fetch successfully');
//$response['data'] = $data;
echo json_encode($data);
?>