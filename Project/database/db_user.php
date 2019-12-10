<?php
  include_once('../includes/database.php');

  function logUser($username, $password) {
    $db = Database::instance()->db();
    $stmt = $db->prepare('SELECT * FROM user WHERE username = ?');
    $stmt->execute(array($username));
    $user = $stmt->fetch();
    if($user!=false && password_verify($password, $user['password'])){
        $_SESSION['username']= $username;
        return true;
    }
    else return false; 
  }

  function addUser($username, $password, $name){
    $options = ['cost' => 12];
    $db = Database::instance()->db();
    $stmt1 = $db->prepare('SELECT * FROM user WHERE username = ?');
    $stmt1->execute(array($username));
    $user = $stmt1->fetch();
    if($user != NULL)
        return false;
    $stmt = $db->prepare('INSERT INTO user VALUES(?, ?, ?)');
    $stmt->execute(array($username, password_hash($password, PASSWORD_DEFAULT, $options), $name));
    return true;
    }

    function getUserPass($username, $password){
      $db = Database::instance()->db();
      $stmt = $db->prepare('SELECT * FROM user WHERE username = ?');
      $stmt->execute(array($username));
      $pass= $stmt->fetch();
      return password_verify($password, $pass['password']);
    }

    function updateUser($username, $new_username, $password){
      $db = Database::instance()->db();
      $stmt = $db->prepare('UDPATE user SET password=?, username=? WHERE username = ?');
      $stmt->execute(array($password, $new_username, $username));
      
    }

    function getUserID($username){
      $db = Database::instance()->db();
      $stmt = $db->prepare('SELECT * FROM user WHERE username = ?');
      $stmt->execute(array($username));
      $usr= $stmt->fetch();
      return $usr['id'];
    }
?>