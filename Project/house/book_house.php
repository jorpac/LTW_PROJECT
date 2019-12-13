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

book($id, $_SESSION['username'], $indate, $outdate);
}

?>