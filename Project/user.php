<?php

include_once('templates/draw_header.php');
include_once('templates/draw_body.php');

draw_header($_SESSION['username']);
draw_user_body();

?>