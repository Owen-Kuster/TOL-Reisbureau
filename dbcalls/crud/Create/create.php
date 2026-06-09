<?php

include(__DIR__ . '/../../connection/connection.php');

$departure = $_POST["departure"];
$destination = $_POST["destination"];
$departure_time = $_POST["departure_time"];
$arrival_time = $_POST["arrival_time"];
$price = $_POST["price"];
$people = $_POST["people"];


//variabel met een SQL query
$sql = "INSERT INTO flights(FlightDeparture, FlightDestination, FlightAvailableSeats, FlightDepartureTime, FlightArrivalTime, FlightPrice) VALUES (:FlightDeparture, :FlightDestination, :FlightAvailableSeats, :FlightDepartureTime, :FlightArrivalTime, :FlightPrice)";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':FlightDeparture', $departure);
$stmt->bindParam(':FlightDestination', $destination);
$stmt->bindParam(':FlightAvailableSeats', $people);
$stmt->bindParam(':FlightDepartureTime', $departure_time);
$stmt->bindParam(':FlightArrivalTime', $arrival_time);
$stmt->bindParam(':FlightPrice', $price);

//execute on db
$stmt->execute();

header("Location: /pages/adminPage/admin.php");