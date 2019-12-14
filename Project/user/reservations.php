<?php
include_once('../templates/draw_header.php');
include_once('../session.php');
draw_header($_SESSION['username']);
include_once('../database/db_house.php');
include_once("../templates/draw_place.php");
include_once('../database/db_user.php');
$id=getUserID($_SESSION['username']);

$pl = searchHouseReserved($_SESSION['username']);
foreach($pl as $place){
    draw_place_reserved($place);
}

include_once('../templates/draw_footer.php');
draw_footer(NULL);
?>