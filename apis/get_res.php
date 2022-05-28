<?php
include("connection.php");

$query = $mysqli->prepare("SELECT name, location, ratings from restaurants");

$query->execute();
$array = $query->get_result();

$response = [];

while($todo = $array->fetch_assoc()){
    $response[] = $todo;
} 
echo json_encode($response);
?>