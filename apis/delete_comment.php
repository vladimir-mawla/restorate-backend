<?php
header('Access-Control-Allow-Origin: *');
include("connection.php");


$comment_id = intval($_POST['comment_id']);

$query = $mysqli->prepare("DELETE from comments where comment_id=$comment_id ");


$query->execute();
$response = [];
$response["success"] = true;
echo json_encode($response);
?>