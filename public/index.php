<?php
session_start();
require_once '../config/database.php';
require_once '../app/models/Event.php';
require_once '../app/models/Reservation.php';
require_once '../app/models/Admin.php';
require_once '../app/controllers/EventController.php';
require_once '../app/controllers/AdminController.php';

$database = new Database();
$db = $database->getConnection();
$eventController = new EventController($db);
$adminController = new AdminController($db);

$action = isset($_GET['action']) ? $_GET['action'] : 'list';

switch ($action) {
    case 'list':
        $eventController->listEvents();
        break;

    case 'details':
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $eventController->showDetails($id);
        break;

    case 'reserve':
        $eventController->reserve();
        break;

    case 'admin_login':
        $adminController->login();
        break;

    case 'admin_dashboard':
        $adminController->dashboard();
        break;
        
    case 'view_reservations':
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        if ($id) {
            $adminController->viewEventReservations($id);
        } else {
            header("Location: index.php?action=admin_dashboard");
        }
        break;

    case 'add_event':
        $adminController->showEventForm(); 
        break;

    case 'edit_event':
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $adminController->showEventForm($id);
        break;

    case 'save_event':
        $adminController->saveEvent();
        break;

    case 'delete_event':
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $adminController->deleteEvent($id);
        break;

    case 'view_reservations':
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $adminController->viewReservations($id);
        break;

    case 'logout':
        session_destroy();
        header("Location: index.php");
        break;

    default:
        $eventController->listEvents();
        break;
}