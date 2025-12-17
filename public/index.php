<?php
// Inclure toutes les dépendances
require_once '../config/database.php';
require_once '../app/models/Event.php';
require_once '../app/models/Reservation.php';
require_once '../app/controllers/EventController.php';
require_once '../app/models/Admin.php';
require_once '../app/controllers/AdminController.php';

$database = new Database();
$db = $database->getConnection();

// Récupérer l'action et l'id si présent
$action = $_GET['action'] ?? 'list';
$id = $_GET['id'] ?? null;

// Routing général
switch ($action) {

    // ------------------- FRONT-END -------------------
    case 'details':
        $eventController = new EventController($db);
        if ($id !== null) {
            $eventController->showDetails($id);
        } else {
            echo "<p>ID d'événement manquant.</p>";
        }
        break;

    case 'reserve':
        $eventController = new EventController($db);
        $eventController->reserve();
        break;

    case 'list':
        $eventController = new EventController($db);
        $eventController->listEvents();
        break;

    // ------------------- ADMIN -------------------
    case 'admin_login':
        $adminController = new AdminController($db);
        $adminController->login();
        break;

    case 'admin_dashboard':
        $adminController = new AdminController($db);
        $adminController->dashboard();
        break;

    case 'logout':
        $adminController = new AdminController($db);
        $adminController->logout();
        break;

    default:
        echo "<p>Action inconnue.</p>";
        break;
}
?>
