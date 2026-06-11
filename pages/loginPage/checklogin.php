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

if ($user['Role'] == 'admin') {
    $_SESSION["loggedinAdmin"] = true;
    header("location: ../../pages/adminPage/admin.php");
} else if ($user['Role'] == 'user') {
     $_SESSION["loggedin"] = true;
 
    header("location: ../../index.php");
}