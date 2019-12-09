<?php    
    include_once('../templates/draw_header.php');
    include_once('../templates/draw_body.php');
    include_once('../templates/draw_footer.php');
    include_once('../session.php');
    if(isset($_SESSION['username']))
        draw_header($_SESSION['username']);
    else
        draw_header(NULL);

    draw_main_page();
    draw_footer(NULL);
?>
