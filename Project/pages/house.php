<?php
include_once('../database/db_get_prop.php');
include_once('../templates/draw_header.php');
include_once('../templates/draw_place.php');
include_once('../templates/draw_footer.php');
include_once('../session.php');

$id = $_GET['id'];
$indate = $_GET['indate'];
$outdate = $_GET['outdate'];

if(isset($_SESSION['username']))
    draw_header($_SESSION['username']);
else
    draw_header(null);

$house = getProp($id);
draw_place($house, $indate, $outdate);




?>