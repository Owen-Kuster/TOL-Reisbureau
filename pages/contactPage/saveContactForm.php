<?php
include '../TOL-Reisbureau/dbcalls/connection/connection.php';

    $sql = "INSERT INTO contact (contactName, contactEmail, contactSubject, contactMessage) 
            VALUES (:name, :email, :subject, :message)";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $_POST['contactName']);    
    $stmt->bindParam(":email", $_POST['contactEmail']);
    $stmt->bindParam(":subject", $_POST['contactSubject']);
    $stmt->bindParam(":message", $_POST['contactMessage']);
    $stmt->execute();

?>