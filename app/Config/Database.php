<?php

class Database
{
    /**
     * @var Database|null Instance of the Database class
     */
    private static $instance = null;

    /**
     * @var mysqli Database connection resource
     */
    private $conn;

    private function __construct()
    {
        $this->conn = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
        if (!$this->conn) {
            die("Database connection failed: " . mysqli_connect_error());
        }
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }

    // Prevent cloning and unserialization
    private function __clone()
    {
    }
    public function __wakeup()
    {
    }
}
