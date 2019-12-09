<?php
    include_once('templates/draw_header.php');
    include_once('session.php');
    draw_header($_SESSION['username']);
    ?>
    <section id="edit_profile">
        <form method="post" action="action_change_credentials.php">
            <input type="text" name="username"  placeholder=<?=$_SESSION['username']?>required>
</form>
</section>