<?php
include("connection.php");
$user_id = $_POST["$user_id"]
$query = $mysqli->prepare("SELECT user_id, username, full_name from users where user_id='$user_id' ");

$query->execute();
$array = $query->get_result();

$response = [];

while($a = $array->fetch_assoc()){
    $response[] = $a;
 
} 
echo json_encode($response);

?>