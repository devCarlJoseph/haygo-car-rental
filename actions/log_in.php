<?php
require_once '../config/config.php';
session_start(); 

if (isset($_POST['login'])) {
    $username = $_POST['l-username'];
    $password = $_POST['l-password'];

    $check = "SELECT id, admin_username, admin_pwd, admin_profile FROM haygo_admins WHERE admin_username = ?";
    $stmt = mysqli_prepare($conn, $check);

    if (!$stmt) {
        die("Prepare failed: " . mysqli_error($conn));
    }

    $stmt->bind_param("s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) === 1) {

        mysqli_stmt_bind_result($stmt, $admin_id, $admin_username, $hashed_password, $admin_profile);
        mysqli_stmt_fetch($stmt);

        if (password_verify($password, $hashed_password)) {

            $_SESSION['admin_id'] = $admin_id;
            $_SESSION['admin_username'] = $admin_username;
            $_SESSION['admin_profile'] = $admin_profile;

            mysqli_stmt_close($stmt);
            mysqli_close($conn);

            header('Location: ../admin/dashboard.php');
            exit();
        }
    }

    echo "<script>
            alert('Invalid username or password');
            window.location.href = '../admin/log_in.php';
        </script>";
    exit();
}
