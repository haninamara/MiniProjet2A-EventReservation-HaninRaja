<?php
class Event {
    private $conn;
    private $table_name = "events";

    public $id;
    public $title;
    public $description;
    public $date;
    public $location;
    public $seats;
    public $image;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Méthode pour lire tous les événements (Utilisé en Semaine 2)
    public function readAll() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY date ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>