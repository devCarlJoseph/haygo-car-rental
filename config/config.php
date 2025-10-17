<?php

require_once 'helpers.php';

$conn = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME, );


if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
