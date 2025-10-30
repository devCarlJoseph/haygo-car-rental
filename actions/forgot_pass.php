<?php

require_once '../config/config.php';

if (isset($_POST['forgot_btn'])) {
    $username = trim($_POST['forgot_username'] ?? '');
    $newPass = $_POST['forgot_password'] ?? '';

    if ($username === '' || $newPass === '') {
        echo "<script>
            alert('Please fill in all fields');
            window.location.href = '../admin/log_in.php';
        </script>";
        exit();
    }

    $newPass = password_hash($newPass, PASSWORD_DEFAULT);

    $query = "UPDATE haygo_admins SET admin_pwd = ? WHERE admin_username = ?";
    $stmt = mysqli_prepare($conn, $query);

    if (!$stmt) {
        echo "<p style='color:red;'>Prepare failed: " . htmlspecialchars(mysqli_error($conn)) . "</p>";
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $newPass, $username);

    if (mysqli_stmt_execute($stmt)) {
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            header('Location: ../admin/log_in.php?reset=success');
            exit();
        } else {
            echo "<script>
            alert('Username not found');
            window.location.href = '../admin/log_in.php';
        </script>";
            exit();
        }
    } else {
        echo "<p style='color:red;'>Error executing statement: " . htmlspecialchars(mysqli_stmt_error($stmt)) . "</p>";
        exit();
    }

    mysqli_stmt_close($stmt);
}
