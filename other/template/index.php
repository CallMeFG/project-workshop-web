<?php
require_once 'controller/AuthController.php';

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
} else {
    echo '<a href="view/register.php">Register</a> | <a href="view/login.php">Login</a>';
}
?>