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
  $key=$_POST['id'];
  changeHouseCaract($key,$title,$price,$description);
  header('Location: ../house/manage_places.php');
?>