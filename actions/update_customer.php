<?php

require_once '../config/config.php';

if (isset($_POST['save'])) {
    $name = $_POST['customer_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $birthdate = $_POST['date_of_birth'];
    $id = $_POST['id'];

    $query = "UPDATE customers SET customer_name = ?, email = ?, phone = ?, date_of_birth = ? WHERE id = ?";
    $stmt = $conn->prepare($query);

    $stmt->bind_param("ssssi", $name, $email, $phone, $birthdate, $id);

    if ($stmt->execute()) {
        header("Location: ../admin/customer.php");
        exit();
    } else {
        die("Update failed: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
}
