<?php
    include_once('../database/db_house.php');
    include_once('../database/db_user.php');
    include_once('../session.php');

    $id = $_GET['id'];
     if(!isset($_SESSION['username'])){
         die(header('Location: ../pages/signup.php'));
     }
     else{
         $usr_id = getUserID($_SESSION['username']);
         addToFav($id, $usr_id);
         die(header('Location: ../index.php'));

     }
?>