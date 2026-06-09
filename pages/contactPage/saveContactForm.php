<?php
include (__DIR__ . "/../../dbcalls/connection/connection.php");

    $sql = "INSERT INTO contact (ContactName, ContactEmail, ContactSubject, ContactMessage) 
            VALUES (:ContactName, :ContactEmail, :ContactSubject, :ContactMessage)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":ContactName", $_POST['ContactName']);    
    $stmt->bindParam(":ContactEmail", $_POST['ContactEmail']);
    $stmt->bindParam(":ContactSubject", $_POST['ContactSubject']);
    $stmt->bindParam(":ContactMessage", $_POST['ContactMessage']);
    $stmt->execute();

    header("Location: ./contact.php");

?>