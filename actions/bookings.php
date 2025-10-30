<?php

require_once '../config/config.php';

if (isset($_POST['confirm_booking'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_num'];
    $license_number = $_POST['lic_id'];
    $license_id = $_POST['lic_id'];


    $query = "INSERT INTO bookings (fullname, email, phone_num, id_num) VALUE (?, ?, ?, ?)";

    $stmt = $conn->prepare($query);

    if (!$stmt) {
        die("MySQL prepare error: " . $conn->error);
    }

    $stmt->bind_param("ssss", $fullname, $email, $phone_number, $license_number);

    if ($stmt->execute()) {
        echo "<script>
            alert('Booking successfully saved!');
            window.location.href = '../fleet.php';
        </script>";
    } else {
        echo "<script>alert('Error saving booking: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $conn->close();
}
