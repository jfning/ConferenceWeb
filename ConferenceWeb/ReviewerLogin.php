<?php
include 'view/header.php';
// Start session management and include necessary functions
session_start();
require_once('model/database.php');
require_once('model/reviewer_db.php');

// Get the action to perform
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'show_reviewer_menu';
    }
}
$action = strtolower($action);

// If the user isn't logged in, force the user to login
if (!isset($_SESSION['reviewer_id'])) {
    $action = 'login';
}else
    $reviewer_id = $_SESSION['reviewer_id'];

switch($action) {
    case 'login':
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $reviewer_id = ReviewerDB::is_valid_reviewer_login($email, $password);
        if ($reviewer_id) {
            $_SESSION['reviewer_id'] = $reviewer_id;
            include('view/reviewer_menu.php');
        } else {
            include('view/login.php');
        }
        break;
    case 'show_reviewer_menu':
        include('view/reviewer_menu.php');
        break;
    case 'logout':
        $_SESSION = array();   // Clear all session data from memory
        session_destroy();     // Clean up the session ID
        include('view/login.php');
        break;
}
include 'view/footer.php';
?>