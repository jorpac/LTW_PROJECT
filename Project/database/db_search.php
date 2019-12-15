<?php
  include_once('../includes/database.php');

  function getPlaces($city, $indate, $outdate) {
    $city = strtoupper($city);
    // $indate =  date('Y-m-d', $indate);
    // $outdate =  date('Y-m-d', $outdate);
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM place WHERE city = ?');
    $stmt->execute(array($city));
    $places = $stmt->fetchAll(); 
    foreach ($places as $key=>$place) {
      $stmt1 = $db->prepare('SELECT * FROM reservation WHERE idplace = ? and ((julianday(?) >= julianday(checkindate) and julianday(?) <= julianday(checkoutdate)) or (julianday(?) <= julianday(checkoutdate) and julianday(?) >= julianday(checkindate)))');
      $stmt1->execute(array($place['id'], $indate, $indate, $outdate, $outdate));
      $books = $stmt1->fetchAll(); 
      if($books != NULL)
        unset($places[$key]);
    }
    return $places;
  }

  function getFavPlaces($user_id, $indate, $outdate) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM favourite join place WHERE favourite.idusr = ? and idplace = place.id');
    $stmt->execute(array($user_id));
    $places = $stmt->fetchAll(); 
    foreach ($places as $key=>$place) {
      $stmt1 = $db->prepare('SELECT * FROM reservation WHERE idplace = ? and ((julianday(?) >= julianday(checkindate) and julianday(?) <= julianday(checkoutdate)) or (julianday(?) <= julianday(checkoutdate) and julianday(?) >= julianday(checkindate)))');
      $stmt1->execute(array($place['place.id'], $indate, $indate, $outdate, $outdate));
      $books = $stmt1->fetchAll(); 
      if($books != NULL)
        unset($places[$key]);
    }
    return $places;
  }
?>