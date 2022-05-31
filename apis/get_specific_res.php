<?php

include("connection.php");

$res_id = $_POST['res_id'];

$query = $mysqli->prepare("SELECT res_id, name, img, location, ratings from restaurants WHERE res_id=?");
$query->bind_param("i", $res_id);

$query->execute();
$array = $query->get_result();

$response = [];

while($a = $array->fetch_assoc()){
    $response[] = $a;
 
} 
echo json_encode($response);

?>
