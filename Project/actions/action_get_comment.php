<?php
    $id = $_GET['id'];

    include_once('../database/db_comment.php');

    $c = getComments($id);

    echo json_encode($c);


?>