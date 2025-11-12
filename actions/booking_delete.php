<?php

require_once '../config/config.php';

if (isset($_GET['id'])) {
    $booking_id = $_GET['id'];

    $query = "DELETE FROM bookings WHERE id = ?";
    $stmt = $conn->prepare($query);

    $stmt->bind_param("i", $booking_id);

    if ($stmt->execute()) {
        header("Location: ../admin/bookings.php");
        exit();
    }

    $stmt->close();
    $conn->close();

}
