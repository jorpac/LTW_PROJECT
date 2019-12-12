<?php
include_once('../templates/draw_header.php');
include_once('../session.php');
include_once('../database/db_house.php');
if(isset($_SESSION['username']))
    draw_header($_SESSION['username']);
else
    draw_header(NULL);
$key=$_GET['id'];
$place=getHouseCaract($id);
?>

<?php
    include_once('../database/db_house.php');
    $places=getHouseUsername($_SESSION['username']);
?>
    <div id="your_house">
        <h1 id="tit"><?=$place['title']?></h1>
        <h2 id="pri"><?=$place['price']?>€</h2>
        <p id="desc"><?=$place['description']?></p>
        <p id="address"><?=$place['address']?> - <?=$place['city']?></p>
    </div>

<?php
    include_once('../templates/draw_footer.php');
    draw_footer(NULL);
?>
