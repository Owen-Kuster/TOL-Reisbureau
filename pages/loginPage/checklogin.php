<?php
session_start();
include (__DIR__ . "/../../dbcalls/connection/connection.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE Username = :username AND Password = :password";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":username", $username);
$stmt->bindParam(":password", $password);
$stmt->execute();

$user = $stmt->fetch();

// var_dump($user);


if (isset($user)) {
    $_SESSION['role'] = $user['Role'];
    $_SESSION['username'] = $user['Username'];
    header ('location: ../adminPage/admin.php');}
// } else if () {
// } 