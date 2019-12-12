<?php
    include_once('../includes/database.php');
    include_once('db_user.php');

    function getHouseCaract($key){
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT * FROM place WHERE id = ?');
        $stmt->execute(array($key));
        return $stmt->fetch();
    }

    function getHouseUsername($username){
        $db = Database::instance()->db();
        $id = getUserId($username);
        $stmt = $db->prepare('SELECT * FROM place WHERE idusr = ?');
        $stmt->execute(array($id));
        return $stmt->fetchAll();
    }
    
    function changeHouseCaract($key,$title, $price,$description) {
        $db =Database::instance()->db();
        $stmt = $db->prepare('UPDATE place SET title = ? AND price = ? AND description = ? where id = ? ');
        $stmt->execute(array($title,$price,$description,$key));
        return $stmt;
    }

    function addHouse($title,$price,$description,$userid,$address,$city){
        $db=Database::instance()->db();
        $stmt=$db->prepare("INSERT INTO place (title,price,description,idusr,address,city) VALUES (?,?,?,?,?,?)");
        $stmt->execute(array($title,$price,$description,$userid,$address,$city));
        return true;
    }
?>