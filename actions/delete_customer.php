<?php 

require_once '../config/config.php';

if(isset($_GET['id'])) {
    $customer_id = $_GET['id'];

    $query = "DELETE FROM customers WHERE id = ?";
    $stmt = $conn->prepare($query);

    $stmt->bind_param("i", $customer_id);

    if($stmt->execute()) {
        header("Location: ../admin/customer.php");
    }

    $stmt->close();
    $conn->close();
}