<?php
header('Access-Control-Allow-Origin: *');
include("connection.php");
$username = $_POST["username"];
$password = $_POST["password"];
$query = $mysqli->prepare("Select user_id from users where username = ? AND password = ?");
$query->bind_param("ss", $username, $password);
$query->execute();
$query->store_result();
$num_rows = $query->num_rows;
$query->bind_result($user_id);
$query->fetch();
$response = [];
if($num_rows == 0){
    $response["response"] = "User Not Found";
}else{
    $response["response"] = "Logged in";
    $response["user_id"] = $user_id;
}
echo json_encode($response);

?>