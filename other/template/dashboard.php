<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}
?>
<h2>Selamat datang, <?php echo $_SESSION['user']; ?>!</h2>
<a href="index.php?action=logout">Logout</a>