<?php
require_once '../app/controller/AuthController.php';

include '../app/view/partials/nav.php';

$action = $_GET['action'] ?? null;

if ($action === 'register' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $auth = new AuthController();
    $auth->register($_POST['username'], $_POST['password']);
} elseif ($action === 'login' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $auth = new AuthController();
    $auth->login($_POST['username'], $_POST['password']);
} elseif ($action === 'logout') {
    $auth = new AuthController();
    $auth->logout();
}

include '../app/view/partials/home.php';
?>