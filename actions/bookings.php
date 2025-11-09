<?php
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

// If booking_id exists and submit_status is provided, update status
if (isset($_POST['submit_status'], $_POST['booking_id'])) {
    $stmt = $conn->prepare("UPDATE bookings SET status=? WHERE id=?");
    $stmt->bind_param("si", $submit_status, $booking_id);
    $stmt->execute();
    exit;
}
