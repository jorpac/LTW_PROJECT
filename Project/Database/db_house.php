<?php
    include_once('../includes/database.php');

    function getHouseCaract($key){
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT * FROM place WHERE id = ?');
        $stmt->execute(array($key));
        return $stmt->fetch();
    }

    function getHouseUsername($username){
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT * FROM place WHERE username = ?');
        $stmt->execute(array($username));
        return $stmt->fetchAll();
    }
    
    function changeHouseCaract($key,$title, $price,$description) {
        $db =Database::instance()->db();
        $stmt = $db->prepare('UPDATE place SET title = ? AND price = ? AND description = ? where id = ? ');
        $stmt->execute(array($title,$price,$description,$key));
        return $stmt;
    }

    function addHouse($title,$price,$description,$username,$address,$city){
        $db=Database::instance()->db();
        $stmt=$db->prepare("INSERT INTO place (title,price,description,username,address,city) VALUES ('?','?','?','?','?','?')");
        $stmt->execute(array($title,$price,$description,$username,$address,$city));
        return $stmt;
    }
?>