<?php
require_once "DbhInc.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'] ?? null;
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['pwd'] ?? '';
    $passHashed = password_hash($password, PASSWORD_DEFAULT);
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);

    if (empty($id) || empty($username) || empty($password) || empty($email)) {
        echo "<script>
            alert('All fields are required');
            window.location.href = '../UpdateAndDelete.php';
        </script>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
            alert('Invalid email format');
            window.location.href = '../UpdateAndDelete.php';
        </script>";
        exit;
    }

    if (strlen($password) < 8) {
        echo "<script>
            alert('Password must contain at least 8 characters');
            window.location.href = '../UpdateAndDelete.php';
        </script>";
        exit;
    }

    // Check if email is already used by another account
    $check = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ? AND id != ?");
    $check->execute([$email, $id]);

    if ($check->fetchColumn() > 0) {
        echo "<script>
            alert('Email already in use by another account');
            window.location.href = '../UpdateAndDelete.php';
        </script>";
        exit;
    }

    // Update user
    $query = 'UPDATE users SET username = ?, pwd = ?, email = ? WHERE id = ?';
    $stmt = $pdo->prepare($query);
    $stmt->execute([$username, $passHashed, $email, $id]);

    $stmt = null;
    $pdo = null;

    echo "<script>
        alert('Update successful');
        window.location.href = '../UpdateAndDelete.php';
    </script>";
    exit;
} else {
    header('Location: ../UpdateAndDelete.php');
    exit;
}
