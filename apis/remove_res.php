<?php

include("connection.php");




//$data = base64_encode($img);

$query = $mysqli->prepare("DELETE FROM restaurants WHERE res_id='1'");

$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>