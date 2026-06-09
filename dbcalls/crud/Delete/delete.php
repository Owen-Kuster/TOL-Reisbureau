<?php
include(__DIR__ . '/../../connection/connection.php');

$id = $_GET["ContactID"];

$sql = "DELETE FROM contact WHERE ContactID = :ContactID";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':ContactID', $id);
$stmt->execute();

header("Location: /pages/adminPage/admin.php");