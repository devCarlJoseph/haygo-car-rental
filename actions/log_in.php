<?php 

require_once '../config/config.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = "SELECT admin_pwd FROM haygo_admins WHERE admin_username = ?";
    $stmt = mysqli_prepare($conn, $check);

    if (!$stmt) {
        die("Prepare failed: " . mysqli_error($conn));
    }

    $stmt->bind_param("s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) === 1) {
        mysqli_stmt_bind_result($stmt, $hashed_password);
        mysqli_stmt_fetch($stmt);

        if (password_verify($password, $hashed_password)) {
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            header('Location: ../admin/dashboard.php');
            exit();
        } else {
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            echo "<script>
                alert('Invalid username or password');
                window.location.href = '../admin/log_in.php';
            </script>";
            exit();
        }
    } else {
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        echo "<script>
            alert('Invalid username or password');
            window.location.href = '../admin/log_in.php';
        </script>";
        exit();
    }
}
