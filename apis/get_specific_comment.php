<?php
header('Access-Control-Allow-Origin: *');
include("connection.php");

$comment_id = intval($_POST['comment_id']);



$query = $mysqli->prepare("DELETE comment from comments where comment_id=$comment_id ");

$query->execute();
$array = $query->get_result();

$response = [];

while($a = $array->fetch_assoc()){
    $response[] = $a;
 
} 
echo json_encode($response);


?>