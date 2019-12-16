<?php
    include_once('../session.php');

    $city = $_POST['destination'];

    // Don't allow certain characters
  if ( !preg_match ("/^[a-zA-Z0-9]+$/", $city)) {
    $_SESSION['messages'][] = array('type' => 'error', 'content' => 'Destination can only contain letters and numbers!');
    die(header('Location: ../index.php'));
  }
  else{
    $indate = $_POST['check_in'];
    $outdate = $_POST['check_out'];
    $now_date = date("Y-m-d");
    // print_r($indate);
    if($indate < $now_date)
        die(header('Location: ../index.php'));
    else if($outdate < $indate)
    die(header('Location: ../index.php'));
    else{
    include_once('../database/db_search.php');
    include_once('../templates/draw_header.php');
    include_once('../templates/draw_body.php');
    include_once('../templates/draw_place.php');

    if(isset($_SESSION['username']))
        draw_header($_SESSION['username']);
    else
        draw_header(NULL);

    $places = getPlaces($city, $indate, $outdate);
   // print($places);
   ?>
   <section id="places">
   <div class="fav">
        <h2 id="favs_icon"><a href="../pages/fav.php?check_in=<?=$indate?>&check_out=<?=$outdate?>"><i class="fas fa-star"></i></a></h2>
        <span class="favour">My Favourites</span>    
    </div>
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
  }
?>
