<?php 
$con = mysqli_connect("my_host","my_user","my_password","my_db");

$name = $_POST["name"];
$username = $_POST["username"];
$mail = $_POST["mail"];
$password = $_POST["password"];

$statement = mysqli_prepare($con, "INSERT INTO user (name, username, mail, password) VALUES (?,?,?,?)" );
mysqli_stmt_bind_param($statement, "siss", $name, $username, $mail, $password)
mysqli_stmt_execute($statement);

$response = array();
$response["success"] = true;

echo json_encode($response);


 ?>