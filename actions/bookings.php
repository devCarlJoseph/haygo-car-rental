<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

require_once '../config/config.php';

$booking_id = isset($_POST['booking_id']) ? $_POST['booking_id'] : null;
$submit_status = isset($_POST['submit_status']) ? $_POST['submit_status'] : null;

if (!isset($_POST['booking_id']) || empty($_POST['booking_id'])) {
    if (isset($_POST['fullname'], $_POST['email'], $_POST['phone_num'], $_POST['lic_id'], $_POST['birth'], $_POST['pick_up'], $_POST['drop_off'], $_POST['vehicle_id'], $_POST['total_price'])) {

        $customer     = $_POST['fullname'];
        $c_email      = $_POST['email'];
        $p_num        = $_POST['phone_num'];
        $license_id   = $_POST['lic_id'];
        $birthdate    = $_POST['birth'];
        $pickup_date  = $_POST['pick_up'];
        $return_date  = $_POST['drop_off'];
        $vehicle_id   = $_POST['vehicle_id'];
        $total_price  = $_POST['total_price'];

        $status = 'pending';

        $bookingQuery = "INSERT INTO bookings 
            (customer_name, email, phone_num, lic_id, vehicle_id, date_of_birth, booking_date, return_date, total_price, status)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($bookingQuery);
        $stmt->bind_param("ssssisssds", $customer, $c_email, $p_num, $license_id, $vehicle_id, $birthdate, $pickup_date, $return_date, $total_price, $status);
        $stmt->execute();

        $booking_id_inserted = $conn->insert_id;

        $updateVehicle = $conn->prepare("UPDATE vehicles SET status='unavailable' WHERE id=?");
        $updateVehicle->bind_param("i", $vehicle_id);
        $updateVehicle->execute();

        $customerQuery = "INSERT INTO customers (customer_name, email, phone, date_of_birth) 
                          VALUES (?, ?, ?, ?) 
                          ON DUPLICATE KEY UPDATE customer_name = VALUES(customer_name), phone = VALUES(phone), date_of_birth = VALUES(date_of_birth)";

        $custStmt = $conn->prepare($customerQuery);
        $custStmt->bind_param("ssss", $customer, $c_email, $p_num, $birthdate);
        $custStmt->execute();


        echo $booking_id_inserted;
        exit;
    }
}


if (isset($_POST['submit_status'], $_POST['booking_id'])) {
    $stmt = $conn->prepare("UPDATE bookings SET status=? WHERE id=?");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("si", $submit_status, $booking_id);
    if (!$stmt->execute()) {
        die("Booking update failed: " . $stmt->error);
    }

    // Fetch the vehicle_id for this booking
    $getVehicle = $conn->prepare("SELECT vehicle_id FROM bookings WHERE id=?");
    if (!$getVehicle) {
        die("Prepare failed (getVehicle): " . $conn->error);
    }

    $getVehicle->bind_param("i", $booking_id);
    if (!$getVehicle->execute()) {
        die("Vehicle ID query failed: " . $getVehicle->error);
    }

    $getVehicle->bind_result($vehicle_id);
    $getVehicle->fetch();
    $getVehicle->close();

    if (!empty($vehicle_id)) {
        $vehicle_status = in_array($submit_status, ['cancelled', 'completed'], true) ? 'available' : 'unavailable';

        $restore = $conn->prepare("UPDATE vehicles SET status=? WHERE id=?");
        if (!$restore) {
            die("Prepare failed (restore): " . $conn->error);
        }

        $restore->bind_param("si", $vehicle_status, $vehicle_id);
        if (!$restore->execute()) {
            die("Vehicle status update failed: " . $restore->error);
        }

        $restore->close();
    } else {
        die("No vehicle_id found for booking ID: $booking_id");
    }

    unset($_SESSION['pickupDate'], $_SESSION['dropoffDate']);
    echo "success";
    exit;
}
