<?php

require_once '../config/config.php';

if (isset($_GET['id'])) {
    $vehicle_id = $_GET['id'];

    $check = $conn->prepare("SELECT id FROM bookings WHERE vehicle_id = ? AND status != 'cancelled'");
    $check->bind_param("i", $vehicle_id);
    $check->execute();
    $res = $check->get_result();

    if ($res->num_rows > 0) {
        echo "<script>
                alert('You cannot delete this vehicle because it is linked to bookings.');
                window.location.href='../admin/fleet.php';
              </script>";
        exit();
    }

    // Get the image file if it exists
    $imgQuery = $conn->prepare("SELECT car_image FROM vehicles WHERE id = ?");
    $imgQuery->bind_param("i", $vehicle_id);
    $imgQuery->execute();
    $result = $imgQuery->get_result();
    $car = $result->fetch_assoc();

    if ($car && !empty($car['car_image'])) {
        $image_path = "../uploads/vehicles/" . $car['car_image'];
        if (file_exists($image_path)) {
            unlink($image_path);
        }
    }

    // Delete vehicle record
    $deleteStmt = $conn->prepare("DELETE FROM vehicles WHERE id = ?");
    $deleteStmt->bind_param("i", $vehicle_id);

    if ($deleteStmt->execute()) {
        $deleteStmt->close();
        $conn->close();
        header("Location: ../admin/fleet.php");
        exit();
    }
}
