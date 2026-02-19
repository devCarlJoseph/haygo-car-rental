<?php

abstract class BaseModel
{
    protected $conn;

    public function __construct()
    {
        $this->conn = Database::getInstance()->getConnection();
    }
}
