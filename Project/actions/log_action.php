<?php
  include_once('../session.php');
  include_once('../database/db_user.php');
  include_once('../templates/draw_header.php');
  include_once('../templates/draw_body.php');  
  include_once('../templates/draw_footer.php');
  $username = $_POST['username'];
  $password = $_POST['password'];
  if (logUser($username, $password)) {
    $_SESSION['username'] = $username;
    draw_header($username);
    draw_main_page();
    draw_footer(NULL);
  } else {
    die(header('Location: ../pages/login.php'));
  }
?>