<?php
function draw_header($username){
    ?>
    <!doctype html>
<html>
    <head>
        <title>Book&GO</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans+Condensed:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">
    </head>

    <body>     
        <header>
            <h1><a href="index.php">BOOK&G<i class="fas fa-globe-africa fa-sm"></i></a></h1>
            <h2 id="index_login"><a href="login.php">Login</a></h2>
            <h2 id="index_signup"><a href="signup.php">Signup</a></h2>
        </header>

<?php
}
?>