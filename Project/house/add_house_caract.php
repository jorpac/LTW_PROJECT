<?php
  include_once('../Database/db_house.php');
  include_once('../session.php');
  $title = $_POST['title'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $username=$_SESSION['username'];
  addHouse($title,$price,$description,$username,$address,$city);
  header('Location: ../house/manage_places.php');
?>