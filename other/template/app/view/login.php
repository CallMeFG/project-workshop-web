<?php
include_once __DIR__ . '/partials/nav.php';
?>
<div class="form-login">

        <form method="POST" action="/other/template/public/index.php?action=login">
            <div style="text-align: center;">
                <h2>Form Login</h2>
            </div>
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <div style="text-align: center; margin-top: 10px;">

                <button type="submit">Masuk</button>
            </div>
        </form>
</div>