<?php

require_once '../config/config.php';

session_start();

if (!isset($_SESSION['user_customer'])) {
    header('Location: ../user/log_in.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../user/dashboard.php');
    exit();
}

$bookingId = (int) ($_POST['booking_id'] ?? 0);
if ($bookingId < 1) {
    header('Location: ../user/dashboard.php?error=invalid');
    exit();
}

$bookingModel = new Booking();
$vehicleModel = new Vehicle();
$booking = $bookingModel->getById($bookingId);

if (!$booking || $booking['email'] !== $_SESSION['user_customer']['email']) {
    header('Location: ../user/dashboard.php?error=unauthorized');
    exit();
}

if (in_array($booking['status'], ['cancelled', 'completed'], true)) {
    header('Location: ../user/dashboard.php?error=locked');
    exit();
}

$bookingModel->updateStatus($bookingId, 'cancelled');
$vehicleModel->setStatus((int) $booking['vehicle_id'], 'available');

header('Location: ../user/dashboard.php?updated=1');
exit();
