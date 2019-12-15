<?php
    include_once('../includes/database.php');
    include_once('db_user.php');
    
    function getComments($id){
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT * FROM comments WHERE idplace = ?');
        $stmt->execute(array($id));
        return $stmt->fetchAll();
    }

    function addComment($userid,$houseid,$title,$description,$mark){
        $db=Database::instance()->db();
        $stmt=$db->prepare("INSERT INTO comments (idusr,idplace,title,description,mark) VALUES (?,?,?,?,?)");
        $stmt->execute(array($userid,$houseid,$title,$description,$mark));
        return $stmt;
    }
?>