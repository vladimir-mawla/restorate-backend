
<?php
header('Access-Control-Allow-Origin: *');
include("connection.php");

$user_id = intval($_POST['user_id']);
echo $user_id;
$username = $_POST["username"];
$full_name = $_POST["full_name"];
$password=hash("sha256",$_POST["password"]);

$query = $mysqli->prepare("UPDATE  users set full_name=  ?, username= ?, password= ? where user_id=$user_id ");
$query->bind_param("sss", $username, $full_name, $password);
$query->execute();
$response = [];
$response["success"] = true;
echo json_encode($response);


?>