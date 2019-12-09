<SCRIPT>
    function popup($message){
        alert($message);
    }
</SCRIPT>

<?php
  include_once('../Database/db_house.php');
  $title = $_POST['title'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $key=0;
  $bool=changeHouseCaract($title,$price,$description,$key);
  if($bool){
      $message="Changes saved successfully !";
      echo "<SCRIPT popup($message) </SCRIPT>";
    }
  else{
    $message="Changes couldn't be saved";
    echo "<SCRIPT popup($message) </SCRIPT>";
  }
?>