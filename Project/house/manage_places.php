<?php
include_once('../templates/draw_header.php');
include_once('../session.php');
draw_header($_SESSION['username']);
?>

    <section id="your_places">
    <h1 style="color:white">All your places : </h1>
    
<?php
    include_once('../Database/db_house.php');
    $places=getHouseUsername($_SESSION['username']);
    foreach($places as $place){?>
    <div id="your_house">
        <h1 id="tit"><?=$place['title']?></h1>
        <h2 id="pri"><?=$place['price']?>€</h2>
        <p id="desc"><?=$place['description']?></p>
        <p id="link"><a href="../house/edit_house.php?id=<?=$place['id']?>">Modify</a></p>
    </div>
   <?php }
?>

    </section>

<?php
include_once('../templates/draw_footer.php');
draw_footer(NULL);
?>