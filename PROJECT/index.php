<!doctype html>
<html>
    <head>
        <title>Book&GO</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
    </head>

    <body>     
        <header>
            <h1><a href="index.php">BOOK&G<i class="fas fa-globe-africa fa-sm"></i></a></h1>
            <h2 id="login"><a href="login.php">Login</a></h2>
            <h2 id="signup"><a href="login.php">Signup</a></h2>
        </header>


        <form method="post" action="action_search.php">
            <input type="text" name="place" placeholder="Where to" required>
            <input type="date" name="check_in" placeholder="check-in" required>
            <input type="date" name="check_out" placeholder="check-out" required>
            <input type="submit" value="Search">
      </form>


        <section id = "Top_places">

        <div id ="Barcelona">
            <img src="https://cdn.descontos.pt/imgOfertas/deals/original/D36396i11.jpg" alt="Barcelona city">
            <p>Barcelona</p>
            <p>x properties available</p>
        </div>

        <div id="Paris">
            <img src="https://images.adsttc.com/media/images/5d44/14fa/284d/d1fd/3a00/003d/newsletter/eiffel-tower-in-paris-151-medium.jpg?1564742900" alt="Paris Eifell tower view">
            <p>Paris</p>
            <p>x properties available</p>
        </div>

        <div id = "Amsterdam">
            <img src="https://img.traveltriangle.com/blog/wp-content/uploads/2018/06/amsterdam-evening-canal-cruise.jpg" alt="Amsterdam">
            <p>Amsterdam</p>
            <p>x properties available</p>
        </div>

        <div id="Lisbon">
            <img src="https://www.lisbonguru.com/wp-content/uploads/2015/11/viewpoints-lisbon.jpg" alt="Lisbon">
                <p>Lisbon</p>
                <p>x properties available</p>
        </div>

        </section>
    </body>