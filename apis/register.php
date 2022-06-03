<?php

include("connection.php");

$username = $_POST["username"];
$full_name = $_POST["full_name"];
$password = hash("sha256", $_POST["password"]);
$user_type = $_POST["user_type"];

$query = $mysqli->prepare("INSERT INTO users(username, full_name, password, user_type) VALUES (?, ?, ?, ?)");
$query->bind_param("sssi", $username, $full_name, $password, $user_type);
$query->execute();

$response = [];
$response["success"] = true;

$query = $mysqli->prepare("select user_id from users where username=?");
$query->bind_param("s",$username);
$query->execute();

$query->store_result();
$query->bind_result($user_id);
$query->fetch();
$response["user_id"] = $user_id;
echo json_encode($response);

?>