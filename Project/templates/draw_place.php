<?php
include_once('../database/db_house.php');
function draw_search($place, $indate, $outdate){
        $img_name = getHouseImg($place['id']);
        // $image = imagecreatefromjpeg('../images/'+$img_name+'.jpg');
        // $size = min(imagesx($image), imagesy($image));
        // $im2 = imagecrop($im, ['x' => 0, 'y' => 0, 'width' => $size, 'height' => $size]);
        ?>
        <div id="your_house">
        <img id="house_img" src="../images/<?=$img_name['id']?>.jpg" alt="House"/>
        <h1 id="tit"><a href="../pages/house.php?id=<?=$place['id']?>&indate=<?=$indate?>&outdate=<?=$outdate?>"><?=$place['title']?></a></h1>
        <h2 id="pri"><?=$place['price']?>€</h2>
        <p id="desc"><?=$place['address']?> - <?=$place['city']?></p>
    </div>
<?php
    }

    function draw_place($house, $indate, $outdate){
        ?>
        <div id="house_full">
        <h1 id="tit"><a href="../pages/house.php?id=<?=$house['id']?>&indate=<?=$indate?>&outdate=<?=$outdate?>"><?=$house['title']?></a></h1>
        <h2 id="pri"><?=$house['price']?>€</h2>
        <p id="desc"><?=$house['description']?> - <?=$house['city']?></p>
        <p id="desc"><?=$house['address']?> - <?=$house['city']?></p>
        <form method="POST" action="../house/book_house.php?id=<?=$house['id']?>&indate=<?=$indate?>&outdate=<?=$outdate?>">
            <input type="submit" value="Book"/>
        
        </form>
    </div>
<?php
    }

    function draw_manage($place){
        $img_name = getHouseImg($place['id']);
        ?>
        <div id="your_house">
        <img id="house_img" src="../images/<?=$img_name['id']?>.jpg" alt="House"/>
            
        <!-- <h1 id="tit"><?=$place['title']?></h1> -->
        <h1 id="tit"><a href="../house/edit_house.php?id=<?=$place['id']?>"><?=$place['title']?></a></h1>
        <h2 id="pri"><?=$place['price']?>€</h2>
        <p id="desc"><?=$place['address']?> - <?=$place['city']?></p>
        <!-- <p id="desc"><?=$place['description']?></p>
        <p id="link"><a href="../house/edit_house.php?id=<?=$place['id']?>">Modify</a></p> -->
    </div>
<?php
    }
    function draw_place_reserved($house){
        ?>
    <div id="house_full">
        <h1 id="tit"><?=$house['title']?></h1>
        <h2 id="pri"><?=$house['price']?>€</h2>
        <p id="desc"><?=$house['description']?> - <?=$house['city']?></p>
        <p id="desc"><?=$house['address']?> - <?=$house['city']?> from <?=$house['checkindate']?> to <?=$house['checkoutdate']?></p>
        <form action="../house/cancel_book.php?id=<?=$house['id']?>&indate=<?=$house['checkindate']?>&outdate=<?=$house['checkoutdate']?>" method="post">
        <input type="submit" value="Cancel reservation"/>    
    </form>
    </div>
<?php
    }
?>