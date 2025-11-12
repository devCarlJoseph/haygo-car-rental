<?php 

require_once '../config/config.php';

if(isset($_GET['id'])) {
    $message_id = $_GET['id'];

    $query = "DELETE FROM messages WHERE id = ? ";
    $stmt = $conn->prepare($query);

    $stmt->bind_param("i", $message_id);

    if($stmt->execute()) {
        header("Location: ../admin/messages.php");
        exit();
    }

    $stmt->close();
    $conn->close();
}