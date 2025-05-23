<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/Project-website/other/template/public/css/style.css">
</head>
<body>
    <header class="header">
        <nav class="nav">
                <ul class="navlist">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            <div>
                <?php if (isset($_SESSION['user'])): ?>
                    <a href="view/profile.php">Profil</a> | <a href="index.php?action=logout">Logout</a>
                <?php else: ?>
                    <a href="../app/view/register.php">Register</a> | <a href="../app/view/login.php">Login</a>
                <?php endif; ?>

            </div>
        </nav>
    </header>
    