<?php
    include_once("../session.php");
    session_destroy();
    die(header('Location: ../index.php'));

?>