<?php
require_once '../config/config.php';

$booking_id = $_POST['booking_id'] ?? null;
$submit_status = $_POST['submit_status'] ?? null;

if (!$booking_id) {
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

    $customerQuery = "INSERT INTO customers (customer_name, email, phone, date_of_birth) 
                      VALUES (?, ?, ?, ?) 
                      ON DUPLICATE KEY UPDATE customer_name = VALUES(customer_name), phone = VALUES(phone), date_of_birth = VALUES(date_of_birth)";
    $custStmt = $conn->prepare($customerQuery);
    $custStmt->bind_param("ssss", $customer, $c_email, $p_num, $birthdate);
    $custStmt->execute();

    echo $booking_id_inserted;
    exit;
}

if ($submit_status) {
    $stmt = $conn->prepare("UPDATE bookings SET status=? WHERE id=?");
    $stmt->bind_param("si", $submit_status, $booking_id);
    $stmt->execute();
    exit;
}
