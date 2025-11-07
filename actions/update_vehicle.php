<?php

require_once '../config/config.php';

if (isset($_POST['update'])) {
    $car_name = $_POST['car_name'];
    $description = $_POST['car_description'];
    $seats = $_POST['seats'];
    $bags = $_POST['bags'];
    $transmission = $_POST['transmission'];
    $type = $_POST['car_type'];
    $price = $_POST['car_price'];
    $id = $_POST['id']; 

    $query = "UPDATE vehicles SET car_name = ?, car_type = ?, car_description = ?, seats = ?, bags = ?, transmission = ?, car_price = ? WHERE id = ?";
    $stmt = $conn->prepare($query);

    $stmt->bind_param("sssiisdi", $car_name, $type, $description, $seats, $bags, $transmission, $price, $id);

    if ($stmt->execute()) {
        header('Location: ../admin/fleet.php');
        exit;
    }

    $stmt->close();
    $conn->close();
}
