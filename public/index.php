<?php
require_once '../config/database.php';
require_once '../app/models/Event.php';
require_once '../app/models/Reservation.php'; 
require_once '../app/controllers/EventController.php';

$database = new Database();
$db = $database->getConnection();

$eventController = new EventController($db);

$action = $_GET['action'] ?? 'list';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'details':
        if ($id !== null) {
            $eventController->showDetails($id);
        } else {
            echo "<p>ID d'événement manquant.</p>";
        }
        break;

    case 'reserve':
        $eventController->reserve();
        break;

    case 'list':
    default:
        $eventController->listEvents();
        break;
}
