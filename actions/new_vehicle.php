<?php

require_once '../config/config.php';

if (isset($_POST['submit'])) {
    $car_name = $_POST['car_name'];
    $description = $_POST['car_description'];
    $seats = $_POST['seats'];
    $bags = $_POST['bags'];
    $transmission = $_POST['transmission'];
    $type = $_POST['car_type'];
    $price = $_POST['car_price'];

    $car_image = $_FILES['car_image']['name'];
    $tmp_name = $_FILES['car_image']['tmp_name'];

    $car_image_dir = "../uploads/vehicles/";

    $destination = $car_image_dir . $car_image;

    // Correct move
    move_uploaded_file($tmp_name, $destination);

    $query = "INSERT INTO vehicles (car_name, car_type, car_description, seats, bags, transmission, car_price, car_image, status)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, 'available')";

    $stmt = $conn->prepare($query);

    $stmt->bind_param("sssiisds", $car_name, $type, $description, $seats, $bags, $transmission, $price, $car_image);

    if ($stmt->execute()) {
        header('Location: ../admin/fleet.php');
    }

    $stmt->close();
    $conn->close();
}
