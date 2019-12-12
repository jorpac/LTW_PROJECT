<?php
  include_once('../database/db_house.php');
  include_once('../session.php');
  $title = $_POST['title'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  addHouse($title,$price,$description,$_SESSION['id'],$address,$city);
  header('Location: ../user/owner.php');
?>