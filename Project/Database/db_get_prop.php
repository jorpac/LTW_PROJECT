<?php
    include_once('../includes/database.php');
    
  function getCity($city) {
    $city = strtoupper($city);
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT COUNT(*) FROM place WHERE city = ?');
    $stmt->execute(array($city));
    //$cnt = $stmt->fetch();
    $cnt1 = $stmt->fetchColumn();
    return $cnt1;
  }

  function getProp($id) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM place WHERE id = ?');
    $stmt->execute(array($id));
    return $stmt->fetch();
    
  }

?>