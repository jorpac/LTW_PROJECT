<?php
include_once('../templates/draw_header.php');
include_once('../session.php');
draw_header($_SESSION['username']);
?>

    <section id="house">
    <h1 style="color:white">All your places : </h1>
    
<?php
    include_once('../Database/db_house.php');
    $places=getHouseUsername($_SESSION['username']);
    foreach($places as $place){
        echo $place['title'];
    }
?>

    </section>

<?php
include_once('../templates/draw_footer.php');
draw_footer(NULL);
?>