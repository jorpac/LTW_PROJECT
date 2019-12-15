<?php
include_once('../templates/draw_header.php');
include_once('../session.php');
draw_header($_SESSION['username']);
?>
    <section id="house">
    <h1 id="newplace">Add a new place here !</h1>
    
    <form method="post" action="add_house_caract.php" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Title" required>
        <input type="text" name="description" placeholder="Description" required>
        <input type="range" id="rangeInput" min="50" max="2000" step="10" name="price" value="1000" required oninput="cost.value=rangeInput.value">
        <input type="text" id="cost" name="price" placeholder="Price : 1000" for="rangeInput">
        <input type="text" name="address" placeholder="Address" required>
        <input type="text" name="city" placeholder="City" required>
        <label class="custom-file-upload">
        <input type="file" name="image" style="display:none">Upload Image
        </label>
        <input type="submit" value="Save the place !">
    </form>
    </section>

<?php
include_once('../templates/draw_footer.php');
draw_footer(NULL);
?>

