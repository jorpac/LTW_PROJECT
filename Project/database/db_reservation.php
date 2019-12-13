<?php
  include_once('../includes/database.php');

  function book($id_house, $id_user, $indate, $outdate) {
   // $city = strtoupper($city);
    $db = Database::instance()->db();
    $stmt = $db->prepare('INSERT INTO reservation (idplace, idusr, checkindate, checkoutdate) VALUES(?, ?, ?, ?)');
    $stmt->execute(array($id_house, $id_user, $indate, $outdate));
  }

?>