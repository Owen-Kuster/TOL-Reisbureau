<?php

//contact
$stmt = $conn->query("SELECT * FROM contact");
$contact = $stmt->fetchAll(PDO::FETCH_ASSOC);
// PDO = sleutelnaam van databse

//flights
$stmt = $conn->query("SELECT * FROM flights");
$flights = $stmt->fetchAll(PDO::FETCH_ASSOC);

//trip
$stmt = $conn->query("SELECT * FROM trip");
$trip = $stmt->fetchAll(PDO::FETCH_ASSOC);

//users
$stmt = $conn->query("SELECT * FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

//review
$stmt = $conn->query("SELECT * FROM review");
$review = $stmt->fetchAll(PDO::FETCH_ASSOC);

//review
$stmt = $conn->query("SELECT * FROM review");
$review = $stmt->fetchAll(PDO::FETCH_ASSOC);

//accommodations
$stmt = $conn->query("SELECT * FROM accommodations");
$accommodations = $stmt->fetchAll(PDO::FETCH_ASSOC);