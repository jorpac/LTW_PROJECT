<?php
    $city = $_POST['destination'];
    include_once('Database/db_search.php');
    $places = getPlaces($city);
    // echo $places;
    foreach ($places as $place) {
        echo $place.['title'];
    }
?>