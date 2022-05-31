<?php
header('Access-Control-Allow-Origin: *');
include("connection.php");



$name = $_POST["name"];
$location = $_POST["location"];
$ratings = $_POST["ratings"];
$img = $_POST["img"];
//$data = base64_encode($img);

$query = $mysqli->prepare("INSERT INTO restaurants(name, location, ratings, img) VALUES (?, ?, ?, ?)");
$query->bind_param("ssis", $name, $location, $ratings, $img);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>