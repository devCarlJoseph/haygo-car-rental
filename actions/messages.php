<?php 

require_once "../config/config.php";

if (isset($_POST['send'])) {
    $fullname = $_POST['fullname'];
    $phone_num = $_POST['phone_num'];
    $message = $_POST['message'];

    $query = "INSERT INTO messages (fullname, contact_num, inquiry) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);

    $stmt->bind_param("sss", $fullname, $phone_num, $message);

    if ($stmt->execute()) {
        header("Location: ../contact.php");
        exit();
    }

    $stmt->close();
    $conn->close();

}