<?php

include("connection.php");

$username = $_POST["username"];
$full_name = $_POST["full_name"];
$password = hash("sha256", $_POST["password"]);
$user_type = $_POST["user_type"];

$query = $mysqli->prepare("UPDATE users set username= ?, full_name = ?, password = ?, user_type = ? WHERE user_id='$user_id'");
$query->bind_param("sssi", $username, $full_name, $password, $user_type);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>