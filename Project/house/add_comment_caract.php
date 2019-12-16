<?php
  // include_once('../database/db_house.php');
  include_once('../database/db_user.php');
  include_once('../session.php');
  include_once('../database/db_comment.php');
  $title = $_POST['title'];
  $description = $_POST['description'];
  $mark = $_POST['mark'];
  $houseid=$_POST['id'];
  addComment(getUserID($_SESSION['username']),$houseid, $title,$description,$mark);
  header('Location: ../index.php');
?>