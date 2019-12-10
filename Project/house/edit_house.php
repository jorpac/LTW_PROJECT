<?php
include_once('../templates/draw_header.php');
include_once('../session.php');
draw_header($_SESSION['username']);
include_once('../database/db_house.php');
include_once('../database/db_user.php');

$id=getUserID($_SESSION['username']);

$place=getHouseCaract($id);
?>

    <section id="house">
    <h1 style="color:white">Modify the caracteristics of your place ! </h1>
    <form method="post" action="edit_house_caract.php">
        <input type="text" name="title" placeholder=<?=$place['title']?> required>
        <input type="text" name="description" placeholder=<?=$place['description']?> required>
        <input type="range" id="rangeInput" min="0" max="2000" step="10" name="price" value=<?=$place['price']?> required oninput="cost.value=rangeInput.value">
        <input type="text" id="cost" name="price" placeholder=<?=$place['price']?> for="rangeInput">
        <input type="hidden" id="id" value=<?=$id?>>
        <input type="submit" value="Save changes">
    </form>
    </section>

<?php
include_once('../templates/draw_footer.php');
draw_footer(NULL);
?>

