<?php
include(__DIR__ . '/../../connection/connection.php');

$username = $_POST["username"];
$password = $_POST["password"];

$role = "user";

$sql = "INSERT INTO users(Username, Password, Role) VALUES (:Username, :Password, :Role)";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':Username', $username);
$stmt->bindParam(':Password', $password);
$stmt->bindParam(':Role', $role);

$stmt->execute();

header("Location: ../../../pages/loginPage/login.php");