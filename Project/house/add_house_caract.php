<?php
  include_once('../Database/db_house.php');
  include_once('../session.php');
  $title = $_POST['title'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  addHouse($title,$price,$description,$_SESSION['username'],$address,$city);
?>