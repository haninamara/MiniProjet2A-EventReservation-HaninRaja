<?php
// Inclusion des fichiers nécessaires
require_once '../config/database.php';
require_once '../app/models/Event.php';
require_once '../app/controllers/EventController.php';

// 1. Initialisation de la base de données
$database = new Database();
$db = $database->getConnection();

// 2. Initialisation du contrôleur
$eventController = new EventController($db);

// 3. Logique de routage simple (Semaine 2 : afficher la liste par défaut)
$eventController->listEvents();
?>