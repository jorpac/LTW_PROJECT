<?php
include_once('../templates/draw_header.php');
include_once('../session.php');
draw_header($_SESSION['username']);
?>
    <section id="house">
    <h1 id="newplace">Add a new comment here !</h1>
    
    <form method="post" action="add_comment_caract.php">
        <input type="text" name="title" placeholder="Title" required>
        <input type="text" name="description" placeholder="Description" required>
        <input type="range" id="rangeInput" min="0" max="10" step="1" value="5" required oninput="cost.value=rangeInput.value">
        <input type="number" id="cost" name="mark" placeholder="5/10" for="rangeInput">
        <input type="hidden" value="<?=$_GET['id']?>" name="id">
        <input type="submit" value="Save the comment !">
    </form>
    </section>

<?php
include_once('../templates/draw_footer.php');
draw_footer(NULL);
?>

