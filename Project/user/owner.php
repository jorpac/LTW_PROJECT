<?php
    include_once('../templates/draw_header.php');
    include_once('../templates/draw_footer.php');
    include_once('../templates/draw_place.php');
    include_once('../session.php');
    include_once('../database/db_house.php');
    if(isset($_SESSION['username']))
        draw_header($_SESSION['username']);
    else
        draw_header(null);
    $pl = getHouseUsername($_SESSION['username']);
    foreach($pl as $place){
        draw_manage($place);
    }
    draw_footer(NULL);
    //header('Location: ../house/edit_house.php');
?>