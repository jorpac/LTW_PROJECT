<?php
    include_once('../includes/database.php');

    function getHouseCaract($key){
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT * FROM place WHERE id = ?');
        $stmt->execute(array($key));
        return $stmt->fetch();
    }
    
    function changeHouseCaract($key,$title, $price,$description) {
        $db =Database::instance()->db();
        $stmt = $db->prepare('UPDATE place SET title = ? AND price = ? AND description = ? where id = ? ');
        $stmt->execute(array($title,$price,$description,$key));
        return $stmt;
    }
?>