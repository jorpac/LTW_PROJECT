<?php
    include_once('../session.php');
    include_once('../database/db_user.php');
    include_once('../database/db_search.php');
    include_once('../templates/draw_header.php');
    include_once('../templates/draw_footer.php');
    include_once('../templates/draw_place.php');

    if(!isset($_SESSION['username']))
        die(header('Location: ../index.php'));

    else{
        $indate = $_GET['check_in'];
        $outdate = $_GET['check_out'];
        draw_header($_SESSION['username']);
        $id = getUserID($_SESSION['username']);

        $places = getFavPlaces($id, $indate, $outdate);
        // print($places);
        ?>
        <section id="places">
        
        <?php
         foreach ($places as $place) {
             draw_search($place, $indate, $outdate);
         }
         ?>
         </section>
     <?php
         include_once('../templates/draw_footer.php');
         draw_footer(NULL);
     }
     ?>
     
    }

?>