<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "userinfodb";
$conn = mysqli_connect(
    $server_name,
    $user_name,
    $password,
    $db_name
);
// $dsn = "mysql:host=localhost;dbname=userinfodb;charset=UTF8";
// $conn = new PDO($dsn, $user_name, $password);
// try {
// 	// $pdo = new PDO($dsn, $user, $password);

// 	if ($conn) {
// 		echo "Connected to the database successfully!";
// 	}
// } catch (PDOException $e) {
// 	echo $e->getMessage();
// }