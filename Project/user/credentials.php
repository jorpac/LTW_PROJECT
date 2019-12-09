<?php
    include_once('../templates/draw_header.php');
    include_once('../session.php');
    draw_header($_SESSION['username']);
    ?>
    <section id="edit_profile">
        <form method="post" action="../actions/action_change_credentials.php">
            <input type="text" name="new_username"  placeholder=<?=$_SESSION['username']?> required/>
            <input type="password" name="old_password" placeholder="Old password" required/>
            <input type="password" name="new_password" placeholder="New password" required/>
            <input type="submit" value="Send"/>
            <!-- placeholder=<?=$_SESSION['username']?> -->
        </form>
    </section>