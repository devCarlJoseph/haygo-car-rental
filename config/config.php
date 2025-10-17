<?php

define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'haygo');
<<<<<<< HEAD
define('DB_PORT', 3306);
=======
define('DB_PORT', 3304);
>>>>>>> 803b7bcf72e4b0991988b2b3a0e35b620504523a

$conn = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);


if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
