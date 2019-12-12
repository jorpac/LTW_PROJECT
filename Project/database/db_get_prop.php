<?php
    include_once('../includes/database.php');
    
  function getCity($city) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT COUNT(*) FROM place WHERE city = ?');
    $stmt->execute(array($city));
    $cnt = $stmt->fetch();
    return count($cnt);
  }

  function getProp($id) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM place WHERE id = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
    
  }

?>