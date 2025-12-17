<?php
class Database {

    private $host = "localhost";
    private $db_name = "minievent_db";
    private $username = "root";
    private $password = "";

    public function getConnection() {
        try {
            $conn = new PDO(
                "mysql:host={$this->host};dbname={$this->db_name};charset=utf8",
                $this->username,
                $this->password
            );
            return $conn;
        } catch (PDOException $e) {
            die("DB error: " . $e->getMessage());
        }
    }
}
