<?php
    include_once('database.php');
    
  function getCity($city) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT COUNT(*) FROM place WHERE city = ?');
    $stmt->execute(array($city));
    $cnt = $stmt->fetch();
    return count($cnt);
  }
?>