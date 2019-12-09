<?php
    function draw_search($place){
        ?>
        <div id="place<?=$place['id']?>"> 
            <p><?=$place['title']?></p>
            <p><?=$place['price']?></p>
    </div>
<?php
    }

?>