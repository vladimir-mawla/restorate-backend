<?php

include("connection.php");

$rating = $_POST["rating"];


$query = $mysqli->prepare("INSERT INTO reviews(rating) VALUES (?)");
$query->bind_param("i", $rating);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>