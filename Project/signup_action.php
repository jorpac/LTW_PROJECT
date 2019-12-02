<?php
  include_once('session.php');
  include_once('Database/db_user.php');
  include_once('templates/draw_header.php');
  include_once('templates/draw_body.php');
  $username = $_POST['username'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  
  if (addUser($username, $password, $name)) {
    $_SESSION['username'] = $username;
    draw_header($username);
    draw_main_page();
  } else {
    header('Location: signup.php');
  }
?>