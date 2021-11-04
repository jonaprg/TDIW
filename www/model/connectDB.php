<?php

require_once __DIR__ . '/../config.php';

class connectDB {
    private static $instance;

    private $conn;

    private function __construct()
    {

        try {
            $this->conn = new PDO(
              sprintf('mysql:dbname=%s;host=%s;charset=utf8mb4',
                  DATABASE_NAME,
                  DATABASE_HOST),
              DATABASE_UER,
              DATABASE_PASSWORD
            );
        }catch (PDOException $exception) {
            echo sprintf('Connection failed: %s', $exception->getMessage());
        }

    }
    private static function getInstance(): self {
        if(self::$instance == null) self::$instance = new self();
        return self::$instance;
    }

    public static function conn() {
        return self::getInstance()->conn;
    }
}
