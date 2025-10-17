<?php

require_once "DbhInc.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['pwd'];
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $passHashed = password_hash($password, PASSWORD_DEFAULT);

    if (empty($username) || empty($password) || empty($email)) {
        echo "<script>
            alert('Required all fields');
            window.location.href = '../SignUp.php';
        </script>;";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
            alert('Invalid email format');
            window.location.href = '../SignUp.php';
        </script>";
    }

    if (strlen($password) < 8) {
        echo "<script>
            alert('Password must contain at least 8 characters');
            window.location.href = '../SignUp.php';
        </script>";
    }

    $check = $pdo->prepare('SELECT COUNT(*) FROM users WHERE email = ?');
    $check->execute([$email]);

    if($check->fetchColumn() > 0) {
        echo "<script>
            alert('Email already in use');
            window.location.href = '../SignUp.php';
        </script>";
    }

    $query = 'INSERT INTO users (username, pwd, email) VALUES (?, ?, ?)';
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username, $passHashed, $email]);

    $stmt = null;
    $pdo = null;

    echo "<script>
        alert('Signup successful');
        window.location.href = '../SignUp.php';
    </script>";
    exit;

} else {
    header('Location: ../SignUp.php');
    exit;
}