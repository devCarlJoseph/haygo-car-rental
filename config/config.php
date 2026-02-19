<?php

require_once 'helpers.php';

// Autoloader for app classes
spl_autoload_register(function ($class_name) {
    $base_dir = __DIR__ . '/../app/';
    $directories = [
        'Config',
        'Models',
        'Controllers',
        'Support',
    ];

    foreach ($directories as $directory) {
        $path = $base_dir . $directory . '/' . $class_name . '.php';
        if (file_exists($path)) {
            require_once $path;
            return;
        }
    }
});

$db = Database::getInstance();
$conn = $db->getConnection();
