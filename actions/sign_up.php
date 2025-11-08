<?php

require_once '../config/config.php';

if (isset($_POST['sign_btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $adminkey = $_POST['adminkey'];
    $pass_has = password_hash($password, PASSWORD_DEFAULT);

    $key = "T0NY0_4DM1N_K3Y";

    if ($adminkey !== $key) {
        header('Location: ../index.php');
        exit();
    }

    $admin_profile = $_FILES['admin_profile']['name'];
    $tmp_pp = $_FILES['admin_profile']['tmp_name'];

    $pp_image_dir = "../uploads/admin/";
    $pp_destin = $pp_image_dir . $admin_profile;

    move_uploaded_file($tmp_pp, $pp_destin);


    $query = "SELECT * FROM haygo_admins WHERE admin_username = ?";
    $stmt = mysqli_prepare($conn, $query);

    if (!$stmt) {
        die("Prepare failed: " . mysqli_error($conn));
    }

    $stmt->bind_param("s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        echo "<script>
            alert('Username already in use');
            window.location.href = '../admin/log_in.php';
        </script>";
        exit();
    }

    mysqli_stmt_close($stmt);

    $query = "INSERT INTO haygo_admins (admin_username, admin_pwd, admin_profile) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    if (!$stmt) {
        die("Prepare failed: " . mysqli_error($conn));
    }

    $stmt->bind_param("sss", $username, $pass_has, $admin_profile);

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
