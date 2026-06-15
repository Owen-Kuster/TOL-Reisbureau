<?php
session_start();
include (__DIR__ . "/../../connection/connection.php");

$username = $_POST['Username'];
$password = $_POST['Password'];

if(!$username || !$password){
    header("location: ../../../pages/loginPage/passwordReset.php");
}

//Check of de gebruiker bestaat
$check = $conn->prepare("SELECT UserID FROM users WHERE Username = :username");
$check->bindParam(":username", $username);
$check->execute();

//Voer de check query uit en tel het aantal gevonden rijen
//rowCount() geeft terug hoeveel rijen de SELECT heeft gevonden
if($check->rowCount() == 0){
    //Als het aantal rijen 0 is, bestaat de gebruiker NIET in de database
    //Stuur de gebruiker terug naar de reset pagina
    header("location: ../../../pages/loginPage/passwordReset.php");
    exit();
}

//Gebruiker bestaat, update het wachtwoord
$sql = "UPDATE users SET Password = :password WHERE Username = :username";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":username", $username);
$stmt->bindParam(":password", $password);
$stmt->execute();

header("location: ../../../pages/loginPage/login.php");