<?php
    include_once('../database/db_owner.php');
    include_once('../templates/draw_header.php');
    include_once('../templates/draw_footer.php');
    include_once('../templates/draw_place.php');
    include_once('../session.php');
    if(isset($_SESSION['username']))
        draw_header($_SESSION['username']);
    else
        draw_header(null);
    $pl = searchUsrHouse($_SESSION['username']);
    foreach($pl as $place){
        draw_manage($place);
    }
    //header('Location: ../house/edit_house.php');
?>