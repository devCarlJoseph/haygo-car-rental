<?php

require_once '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $adminkey = $_POST['adminkey'];
    $adminProfile = $_FILES['adminProfile'];
    $passHashed = password_hash($password, PASSWORD_DEFAULT);

    $key = "T0NY0_4DM1N_K3Y";

    if ($adminkey !== $key) {
        header('Location: ../index.php');
        exit();
    }

    $checkQuery = "SELECT * FROM haygo_admins WHERE admin_username = ?";
    $checkStmt = mysqli_prepare($conn, $checkQuery);

    if (!$checkStmt) {
        die("Prepare failed: " . mysqli_error($conn));
    }

    if (isset($_FILES['adminProfile']) && $_FILES['adminProfile']['error'] === 0) {
        $targetDir = "../uploads/";
        $fileName = basename($_FILES["adminProfile"]["name"]);
        $targetFilePath = $targetDir . $fileName;

        if (move_uploaded_file($_FILES["adminProfile"]["tmp_name"], $targetFilePath)) {
        } else {
            echo "File upload failed.";
        }
    }

    $checkStmt->bind_param("s", $username);
    mysqli_stmt_execute($checkStmt);
    mysqli_stmt_store_result($checkStmt);

    if (mysqli_stmt_num_rows($checkStmt) > 0) {
        mysqli_stmt_close($checkStmt);
        mysqli_close($conn);
        echo "<script>
            alert('Username already in use');
            window.location.href = '../admin/log_in.php';
        </script>";
        exit();
    }

    mysqli_stmt_close($checkStmt);

    $query = "INSERT INTO haygo_admins (admin_username, admin_pwd) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    if (!$stmt) {
        die("Prepare failed: " . mysqli_error($conn));
    }

    $stmt->bind_param("ss", $username, $passHashed);

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        header('Location: ../admin/log_in.php');
        exit();
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header('Location: ../admin/log_in.php');
    exit();
}
