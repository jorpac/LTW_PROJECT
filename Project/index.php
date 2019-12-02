<?php    
    include_once('templates/draw_header.php');
    include_once('templates/draw_body.php');
    include_once('session.php');

    draw_header($_SESSION['username']);
    draw_main_page();
?>
