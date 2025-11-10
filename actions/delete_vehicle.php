<?php

require_once '../config/config.php';

if (isset($_GET['id'])) {
    $vehicle_id = $_GET['id'];
    
    $imgQuery = "SELECT car_image FROM vehicles WHERE id = ?";
    $imgStmt = $conn->prepare($imgQuery);
    $imgStmt->bind_param("i", $vehicle_id);
    $imgStmt->execute();
    $imgResult = $imgStmt->get_result();
    $car = $imgResult->fetch_assoc();

    $image_path = "../uploads/vehicles/" . $car['car_image'];

    if (file_exists($image_path)) {
        unlink($image_path);
    }

    $query = "DELETE FROM vehicles WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $vehicle_id);

    if ($stmt->execute()) {
        header("Location: ../admin/fleet.php");
        exit();

        $stmt->close();
        $conn->close();
    }
} 