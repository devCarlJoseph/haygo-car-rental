<?php

session_start();
session_unset();
session_destroy();

header("Location: ../admin/log_in.php");
exit();

