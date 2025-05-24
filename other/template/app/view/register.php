<?php
include_once __DIR__ . '/partials/nav.php';
?>
<div class="form-register">

    <form method="POST" action="../index.php?action=register">
        <div style="text-align: center;">

            <h2>Form Registrasi</h2>
        </div>
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <div style="text-align: center; margin-top: 10px;">

            <button type="submit">Daftar</button>
        </div>
    </form>
</div>