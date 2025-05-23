<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: /public/index.php");
    exit();
}
?>
<h2>Selamat datang, <?php echo $_SESSION['user']; ?>!</h2>
<a href="../../public/index.php?action=logout">Logout</a>