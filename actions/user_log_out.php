<?php

session_start();
unset($_SESSION['user_customer']);

header('Location: ../login.php');
exit();
