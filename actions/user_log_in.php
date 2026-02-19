<?php

require_once '../config/config.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../user/log_in.php');
    exit();
}

$email = trim($_POST['user_email'] ?? '');
$phone = trim($_POST['user_phone'] ?? '');

if ($email === '' || $phone === '') {
    header('Location: ../user/log_in.php?error=missing');
    exit();
}

$customerModel = new Customer();
$customer = $customerModel->findByEmailAndPhone($email, $phone);

if (!$customer) {
    header('Location: ../user/log_in.php?error=notfound');
    exit();
}

$_SESSION['user_customer'] = [
    'id' => $customer['id'],
    'name' => $customer['customer_name'],
    'email' => $customer['email'],
    'phone' => $customer['phone'],
];

header('Location: ../user/dashboard.php');
exit();
