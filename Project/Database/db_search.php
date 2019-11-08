<?php
  include_once('database.php');

  function getPlaces($city) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM place WHERE city = ?');
    $stmt->execute(array($city));
    return $stmt->fetchAll(); 
  }

?>