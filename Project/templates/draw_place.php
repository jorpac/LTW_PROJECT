<?php
    function draw_search($place){
        ?>
        <div id="your_house">
        <h1 id="tit"><a href="../actions/action_book.php?id=<?=$place['id']?>"><?=$place['title']?></a></h1>
        <h2 id="pri"><?=$place['price']?>€</h2>
        <p id="desc"><?=$place['address']?> - <?=$place['city']?></p>
    </div>
<?php
    }

?>