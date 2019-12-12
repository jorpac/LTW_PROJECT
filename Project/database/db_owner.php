<?php
    include_once('../includes/database.php');
    include_once('db_user.php');

    function searchUsrHouse($username){
        $id = getUserId($username);
        $db = Database::instance()->db();
        $stmt = $db->prepare('SELECT * FROM place WHERE idusr = ?');
        $stmt->execute(array($id));
        return $stmt->fetchAll();
    }

?>