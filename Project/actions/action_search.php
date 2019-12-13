<?php
    $city = $_POST['destination'];
    $indate = $_POST['check_in'];
    $outdate = $_POST['check_out'];
    include_once('../database/db_search.php');
    include_once('../templates/draw_header.php');
    include_once('../templates/draw_body.php');
    include_once('../session.php');
    include_once('../templates/draw_place.php');

    if(isset($_SESSION['username']))
        draw_header($_SESSION['username']);
    else
        draw_header(NULL);

    $places = getPlaces($city, $indate, $outdate);
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
?>
