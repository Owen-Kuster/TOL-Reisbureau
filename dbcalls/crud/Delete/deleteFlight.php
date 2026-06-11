<?php
include(__DIR__ . '/../../connection/connection.php');

$id = $_GET["FlightID"];

$sql = "DELETE FROM flights WHERE FlightID = :FlightID";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':FlightID', $id);
$stmt->execute();

header("Location: /pages/adminPage/admin.php");