<?php
  include_once('../includes/database.php');
  include_once('db_user.php');

  function book($id_house, $username, $indate, $outdate) {
   // $city = strtoupper($city);
    $id_user = getUserID($username);
    $db = Database::instance()->db();
    $stmt = $db->prepare("INSERT INTO reservation (idplace, idusr, checkindate, checkoutdate) VALUES (?, ?, ?, ?)");
    $stmt->execute(array($id_house, $id_user, $indate, $outdate));
    return true;

}


function cancel_book($id_house, $username, $indate, $outdate) {
    // $city = strtoupper($city);
    $id_user = getUserID($username);
    $db = Database::instance()->db();
    $stmt = $db->prepare("DELETE FROM reservation where idplace = ? and idusr=? and checkindate=? and checkoutdate=?");
    $stmt->execute(array($id_house, $id_user, $indate, $outdate));
    if($stmt->rowCount())
        return true;
    else return false;
 
 }

?>