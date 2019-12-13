<SCRIPT>
    function popup($message){
        alert($message);
    }
</SCRIPT>

<?php
  include_once('../database/db_user.php');
  include_once('../database/db_house.php');
  $title = $_POST['title'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $id=$_POST['id'];
  changeHouseCaract($id,$title,$price,$description);
  header('Location: ../user/owner.php');
?>