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


    $query = "INSERT INTO haygo_admins (admin_username, admin_pwd) VALUES (?, ?,)";
    $stmt = mysqli_prepare($conn, $query);


}
