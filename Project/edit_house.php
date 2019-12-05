<?php
include_once('templates/draw_header.php');
draw_header(NULL);
?>

    <section id="house">
    <form method="post" action="edit_house_caract.php">
        <input type="text" name="title" placeholder="new title" required>
        <input type="text" name="description" placeholder="new description" required>
        <input type="range" min="0" max="2000" step="10" list="list" name="price" place holder="new price" required>
        <datalist id="list">
            <option value="0" label="0">
            <option value="500" label="500">
            <option value="1000" label="1000">
            <option value="1500" label="1500">
            <option value="2000" label="2000">
        </datalist>
        <input type="submit" value="Save changes">
    </form>
    </section>

<?php
include_once('templates/draw_footer.php');
draw_footer(NULL);
?>

