<?php

include("connection.php");


$query = $mysqli->prepare("SELECT res_id, name, location, ratings from restaurants WHERE res_id='52'");

$query->execute();
$array = $query->get_result();

$response = [];

while($x = $array->fetch_assoc()){
    $response[] = $x;

} 

echo json_encode($response);

?>