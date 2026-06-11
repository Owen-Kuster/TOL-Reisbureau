<?php

include(__DIR__ . '/../../connection/connection.php');

$flight_id = $_POST["FlightID"];
$departure = $_POST["departure"];
$destination = $_POST["destination"];
$departure_time = $_POST["departure_time"];
$arrival_time = $_POST["arrival_time"];
$price = $_POST["price"];
$people = $_POST["people"];

//variabel met een SQL query
$sql = "UPDATE flights SET FlightDeparture = :FlightDeparture, FlightDestination = :FlightDestination, FlightAvailableSeats = :FlightAvailableSeats, FlightDepartureTime = :FlightDepartureTime, FlightArrivalTime = :FlightArrivalTime, FlightPrice = :FlightPrice WHERE FlightID = :FlightID";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':FlightID', $flight_id);
$stmt->bindParam(':FlightDeparture', $departure);
$stmt->bindParam(':FlightDestination', $destination);
$stmt->bindParam(':FlightAvailableSeats', $people);
$stmt->bindParam(':FlightDepartureTime', $departure_time);
$stmt->bindParam(':FlightArrivalTime', $arrival_time);
$stmt->bindParam(':FlightPrice', $price);

//execute on db
$stmt->execute();

header("Location: /pages/adminPage/admin.php");