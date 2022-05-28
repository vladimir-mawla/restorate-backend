<?php

include("connection.php");

$comment = $_POST["comment"];


$query = $mysqli->prepare("INSERT INTO comments(comment) VALUES (?)");
$query->bind_param("s", $comment);
$query->execute();

$response = [];
$response["success"] = true;

echo json_encode($response);

?>