<?php
  include_once('../session.php');
  include_once('../database/db_user.php');
  include_once('../templates/draw_header.php');
  include_once('../templates/draw_body.php');
  include_once('../templates/draw_footer.php');
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Don't allow certain characters
  if ( !preg_match ("/^[a-zA-Z0-9]+$/", $username)) {
    $_SESSION['messages'][] = array('type' => 'error', 'content' => 'Username can only contain letters and numbers!');
    die(header('Location: ../pages/login.php'));
  }
  if (logUser($username, $password)) {
    $_SESSION['username'] = $username;
    draw_header($username);
    draw_main_page();
    draw_footer(NULL);
  } else {
    die(header('Location: ../pages/login.php'));
  }
?>