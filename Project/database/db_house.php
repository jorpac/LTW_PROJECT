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
        $db=Database::instance()->db();
        $stmt=$db->prepare("INSERT INTO place (title,price,description,idusr,address,city) VALUES (?,?,?,?,?,?)");
        $stmt->execute(array($title,$price,$description,$userid,$address,$city));
        return $stmt;
    }
    function searchHouseReserved($username){
        $id = getUserId($username);
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT * FROM reservation join place on reservation.idplace=place.id WHERE reservation.idusr = ?');
        $stmt->execute(array($id));
        return $stmt->fetchAll();
    }

?>