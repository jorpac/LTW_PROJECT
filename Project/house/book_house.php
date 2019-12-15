<?php
include_once('../database/db_reservation.php');
include_once('../session.php');

if(!isset($_SESSION['username'])){
    die(header('Location: ../pages/login.php'));
}
else{
$id = $_GET['id'];
$indate = $_GET['indate'];
$outdate = $_GET['outdate'];

if ($_SESSION['csrf'] != $_GET['csrf']) {
    $_SESSION['messages'][] = array('type' => 'error', 'content' => 'Invalid request!');
    die(header('Location: ../pages/list.php'));
  }

if(book($id, $_SESSION['username'], $indate, $outdate)){
    die(header('Location: ../book/confim_book.php'));
}
else{
    die(header('Location: ../index.php'));

}
}

?>