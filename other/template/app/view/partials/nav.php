<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/other/template/public/css/style.css">
</head>

<body>
    <header class=" header">
        <nav class="nav">
            <div class="left">
                <a href="#">
                    <h2>CallMe<span>Hotel</span></h2>
                </a>
            </div>
            <div class="right">

                <ul class="navlist">
                    <li><a href="/other/template/public/index.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div>
                    <?php if (isset($_SESSION['user'])): ?>
                        <a href="../app/view/profile.php">Profil</a> | <a href="/other/public/index.php?action=logout">Logout</a>
                    <?php else: ?>
                        <a href="/other/template/app/view/register.php">Register</a> | <a href="/other/template/app/view/login.php">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>