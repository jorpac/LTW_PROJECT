<!doctype html>
<html>
    <head>
        <title>Book&GO</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">
    </head>

    <body>     
        <header>
            <h1><a href="index.php">BOOK&G<i class="fas fa-globe-africa fa-sm"></i></a></h1>
        </header>
    </body>


    <section id="login">
        
      <form method="post" action="../actions/log_action.php">
        <input type="text" name="username" placeholder="username" required>
        <input type="password" name="password" placeholder="password" required>
        <input type="submit" value="Login">
      </form>
  
      <footer>
        <p>Don't have an account? <a href="signup.php">Signup!</a></p>
      </footer>

    </section>

</html>