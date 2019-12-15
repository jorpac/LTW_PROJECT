<?php
    include_once('../session.php');
    include_once('../templates/draw_header.php');
    draw_header($_SESSION['username']);
    ?>
    <h1><?=$_SESSION['username']?> reservation confrimed!</h1>
    <h2>Redirecting in 5 seconds</h2>
    <?php
?>
<script>
         setTimeout(function(){
            window.location.href = '../index.php';
         }, 5000);
</script>