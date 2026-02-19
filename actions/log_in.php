<?php
require_once '../config/config.php';
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['l-username'];
    $password = $_POST['l-password'];

    $admin = new Admin();
    if ($admin->login($username, $password)) {
        header('Location: ../admin/dashboard.php');
        exit();
    }

    echo "<script>
            alert('Invalid username or password');
            window.location.href = '../admin/log_in.php';
        </script>";
    exit();
}
