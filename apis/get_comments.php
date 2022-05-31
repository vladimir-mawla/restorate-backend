<?php
include("connection.php");

$query = $mysqli->prepare("SELECT comment_id, comment, approved from comments where approved=0");

$query->execute();
$array = $query->get_result();

$response = [];

while($a = $array->fetch_assoc()){
    $response[] = $a;
 
} 
echo json_encode($response);

?>