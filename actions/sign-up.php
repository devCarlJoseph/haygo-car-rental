<?php

require_once '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $adminkey = $_POST['adminkey'];

    $key = "T0NY0_4DM1N_K3Y";

    if ($adminkey !== $key) {
        header('Location: ../index.php');
    }

    $checkQuery = "SELECT * FROM haygo_admins WHERE admin_username = ?";
    $checkStmt = mysqli_prepare($conn, $checkQuery);
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


    $query = "INSERT INTO haygo_admins (admin_username, admin_pwd) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        $stmt->bind_param("ss", $username, $password);

        if (mysqli_stmt_execute($stmt)) {
            header('Location: ../admin/log_in.php');
        } else {
         mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    }

    mysqli_close($conn);
}
