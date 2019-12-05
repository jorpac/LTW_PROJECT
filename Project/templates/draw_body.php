<?php
function draw_main_page(){
    include_once('Database/db_get_prop.php');
    $Barcelona = getCity('Barcelona');
    $Lisbon = getCity('Lisbon');
    $Paris = getCity('Paris');
    $Amsterdam = getCity('Barcelona');
    ?>
  
  <form method="post" action="action_search.php">
            <input type="text" name="destination" placeholder=" Where to" required>
            <input type="date" name="check_in" placeholder="check-in" required>
            <input type="date" name="check_out" placeholder="check-out" required>
            <input type="submit" value="Search">
      </form>


        <section id = "Top_places">

        <div id ="Barcelona">
            <img src="https://cdn.descontos.pt/imgOfertas/deals/original/D36396i11.jpg" alt="Barcelona city">
            <p>Barcelona</p>
            <p><?=$Barcelona?> properties available</p>
        </div>

        <div id="Paris">
            <img src="https://images.adsttc.com/media/images/5d44/14fa/284d/d1fd/3a00/003d/newsletter/eiffel-tower-in-paris-151-medium.jpg?1564742900" alt="Paris Eifell tower view">
            <p>Paris</p>
            <p>x properties available</p>
        </div>

        <div id = "Amsterdam">
            <img src="https://img.traveltriangle.com/blog/wp-content/uploads/2018/06/amsterdam-evening-canal-cruise.jpg" alt="Amsterdam">
            <p>Amsterdam</p>
            <p><?=$Amsterdam?> properties available</p>
        </div>

        <div id="Lisbon">
            <img src="https://www.lisbonguru.com/wp-content/uploads/2015/11/viewpoints-lisbon.jpg" alt="Lisbon">
                <p>Lisbon</p>
                <p><?=$Lisbon?> properties available</p>
        </div>

        </section>
    </body>
</html>
<?php
}

function draw_user_body(){
    ?>
        <section id="Change data">
            <h1 id= ><>

    <?php
}

?>