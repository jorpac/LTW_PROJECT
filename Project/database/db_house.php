<?php
    include_once('../includes/database.php');
    include_once('db_user.php');

    function getHouseCaract($key){
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT * FROM place WHERE id = ?');
        $stmt->execute(array($key));
        return $stmt->fetch();
    }

    function getHouseImg($idplace){
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT id FROM img WHERE idplace = ?');
        $stmt->execute(array($idplace));
        return $stmt->fetch();
    }

    function getHouseUsername($username){
        $db = Database::instance()->db();
        $id = getUserId($username);
        $stmt = $db->prepare('SELECT * FROM place WHERE idusr = ?');
        $stmt->execute(array($id));
        return $stmt->fetchAll();
    }
    
    
    function changeHouseCaract($id,$title, $price,$description) {
        $db =Database::instance()->db();
        $stmt = $db->prepare('UPDATE place SET title = ?, price = ?, description = ? WHERE id = ? ');
        $stmt->execute(array($title,$price,$description,$id));
        return $stmt;
    }

    function addHouse($title,$price,$description,$userid,$address,$city){
        $city = strtoupper($city);
        $db=Database::instance()->db();
        $stmt=$db->prepare("INSERT INTO place (title,price,description,idusr,address,city) VALUES (?,?,?,?,?,?)");
        $stmt->execute(array($title,$price,$description,$userid,$address,$city));
        insert_img($db->lastInsertId());
        return $stmt;
    }

    function addToFav($idplace, $userid){
        $db=Database::instance()->db();
        $stmt=$db->prepare("INSERT INTO favourite (idplace, idusr) VALUES (?,?)");
        $stmt->execute(array($idplace, $userid));
        return $stmt;
    }


    function searchHouseReserved($username){
        $id = getUserId($username);
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT * FROM reservation join place on reservation.idplace=place.id WHERE reservation.idusr = ?');
        $stmt->execute(array($id));
        return $stmt->fetchAll();
    }

  function insert_img($id_place){
    $dbh = Database::instance()->db();
  
    $stmt = $dbh->prepare("INSERT INTO img VALUES(NULL, ?)");
    $stmt->execute(array($id_place));

    // Get image ID
    $id = $dbh->lastInsertId();

    // Generate filenames for original, small and medium files
    $smallFileName = "../images/$id.jpg";
    move_uploaded_file($_FILES['image']['tmp_name'], $smallFileName);
    // Move the uploaded file to its final destination
//     move_uploaded_file($_FILES['image']['tmp_name'], $originalFileName);

    // Crete an image representation of the original image
 
    echo "<pre>"; 
    print_r($_FILES); 
    echo "</pre>"; 

    $original = imagecreatefromjpeg($smallFileName);

    $width = imagesx($original);     // width of the original image
    $height = imagesy($original);    // height of the original image

    // Create and save a small square thumbnail
    $small = imagecreatetruecolor(360, 240);
    imagecopyresized($small, $original, 0, 0, 0, 0, 360, 240, $width, $height);
    imagejpeg($small, $smallFileName);

}

?>