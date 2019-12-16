<?php
include_once('../database/db_house.php');
include_once('../database/db_user.php');
include_once('../database/db_comment.php');
include_once('../session.php');
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

    function draw_comment($comment){?>
        <div id="comment">
        <h1><?=$comment['title']?></h1>
        <h2 id="mark"><?=$comment['mark']?>/10</h2>
        <p><?=$comment['description']?></p>
        <p>By <?=getUsername($comment['idusr'])?></p>
        </div>
<?php    }

    function draw_place($house, $indate, $outdate){
        ?>
        <div id="house_full">
        <h1 id="tit"><a href="../pages/house.php?id=<?=$house['id']?>&indate=<?=$indate?>&outdate=<?=$outdate?>"><?=$house['title']?></a></h1>
        <h2 id="pri"><?=$house['price']?>€</h2>
        <p id="desc"><?=$house['description']?> - <?=$house['city']?></p>
        <p id="desc"><?=$house['address']?> - <?=$house['city']?></p>
        <p id="view_comment"><a href="#">View comments</a></p>
        <p id="add_comment"><a href="../house/add_comment.php?id=<?=$house['id']?>">Add a comment</a></p>
        <form method="POST" action="../house/add_fav.php?id=<?=$house['id']?>">
            <input type="submit" value="Add to favourites"/>
        
        </form>
        <form method="POST" action="../house/book_house.php?id=<?=$house['id']?>&indate=<?=$indate?>&outdate=<?=$outdate?>&csrf=<?=$_SESSION['csrf']?>">
            <input type="submit" value="Book"/>
        </form>
        <div id="comment">

        </div>
    <script>
        'use strict'
        let com = document.getElementById("view_comment");
        let com_id = "<?php echo $house['id']?>";
        console.log(com_id);
        com.addEventListener("click", viewcom);

        function viewcom(event) {
            console.log(event);
            let request = new XMLHttpRequest();
            request.addEventListener("load", commentsReceived);
            request.open("get", "../actions/action_get_comment.php?id=" + com_id, true);
            request.send();
        }
        // Handler for ajax response received
        function commentsReceived() {
            console.log(JSON.parse(this.responseText));
          let comments = JSON.parse(this.responseText);
          let list = document.getElementById("comment");
          list.innerHTML = ""; // Clean current comments
        
         // Add new COMMENTS
          for (var i=0; i < comments.length; i++) {
            let item = document.createElement("h1");
            item.innerHTML = comments[i].title;
            list.appendChild(item);
            let item2 = document.createElement("h2");
            item2.setAttribute("id", "mark");
            item2.innerHTML = comments[i].mark + "/10";
            list.appendChild(item2);
            let item3 = document.createElement("p");
            item3.innerHTML = comments[i].description;
            item2.setAttribute("style", "font-size:2em");
            list.appendChild(item3);
          }
        }
    </script>
<!-- <?php
    $comments=getComments($house['id']);
    foreach($comments as $comment){
        draw_comment($comment);
    }
?> -->
    
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