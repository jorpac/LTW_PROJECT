<?php
  include_once('../session.php');
  include_once('../database/db_user.php');
  include_once('../templates/draw_header.php');
  include_once('../templates/draw_body.php');
  $username = $_POST['username'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  
  if (addUser($username, $password, $name)) {
    $_SESSION['username'] = $username;
    die(
      header('Location: ../index.php')
      );
  } else {
    die(
    header('Location: ../pages/signup.php')
    );
  }
?>