<?php 

require_once '../config/config.php';

if (isset($_POST['update'])) {
    $name = $_POST['admin_name'];
    $password = $_POST['admin_pwd'];
    $confirm_pass = $_POST['confirm_pass'];

    if ($password == $confirm_pass) {
        echo "<script>
            alert('Password don't match');
            window.location.href = '../admin/settings.php';
        </script>";
        exit();
    }

    $query = "UPDATE haygo_admin SET admin_ WHERE username = ?";
    $stmt = $conn->prepare($query);
}