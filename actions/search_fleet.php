<?php

session_start();

$_SESSION['pickupDate'] = $_POST['pickupDate'] ?? null;
$_SESSION['dropoffDate'] = $_POST['dropoffDate'] ?? null;

header("Location: ../fleet.php");
