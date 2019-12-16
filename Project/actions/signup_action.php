<?php
  include_once('../session.php');
  include_once('../database/db_user.php');
  include_once('../templates/draw_header.php');
  include_once('../templates/draw_body.php');
  $username = $_POST['username'];
  $password = $_POST['password'];
  $xpassword = $_POST['xpassword'];
  $name = $_POST['name'];
  if($xpassword == $password){
    // Don't allow certain characters
    if ( !preg_match ("/^[a-zA-Z0-9]+$/", $username)) {
      $_SESSION['messages'][] = array('type' => 'error', 'content' => 'Username can only contain letters and numbers!');
      die(header('Location: ../pages/signup.php'));
    }
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
}
  else {
    die(
    header('Location: ../pages/signup.php')
  );
}
?>