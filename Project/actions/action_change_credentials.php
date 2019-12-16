<?php
    include_once('../session.php');
    include_once('../includes/database.php');
    include_once('../database/db_user.php');

    $old_name = $_SESSION['username'];
    $old_pass = $_POST['old_password'];
    $new_pass = $_POST['new_password'];
    $new_name = $_POST['new_username'];
// Don't allow certain characters
if ( !preg_match ("/^[a-zA-Z0-9]+$/", $username)) {
    $_SESSION['messages'][] = array('type' => 'error', 'content' => 'Username can only contain letters and numbers!');
    die(header('Location: ../pages/signup.php'));
  }
    if($old_pass == $new_pass){
        echo "<script>alert('Old password cant be the same');</script>";
        die(header('Location: ../user/credentials.php'));
    }
    
    if(getUserPass($old_name, $old_pass)){
        $id = getUserID($old_name);
        if(updateUser($id, $new_name, $new_pass)){
            $_SESSION['username'] = $new_name;
            die(header('Location: ../pages/user.php'));  
        }
        else
            die(header('Location: ../user/credentials.php'));  

    }
        die(header('Location: ../user/credentials.php'));       
    
?>