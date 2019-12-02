<?php
    include_once('../database.php');
    
  function getCity($city) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT id FROM place WHERE city = ?');
    $stmt->execute(array($city));
    $cnt = $stmt->fetchAll();
    return $cnt;


?>