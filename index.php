<?php session_start();
require_once 'database.php';




 ?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title>Perspectives digitales</title>
</head>
<body>
        <header>
                <div id="banner">
                    <h1>Perspectives Digitales</h1>
                    <div class="element"><script src='https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.6/typed.min.js'></script></div>
                </div>
                <div id="social">
                    <a href='https://www.facebook.com'><img src="images/facebook.svg" height="30px" width="30px"></a>
                    <a href="'https://www.twitter.com"><img src="images/twitter.svg" height="30px" width="30px"></a>
                    <a href="https://www.google.com"><img src="images/google-plus.svg" height="30px" width="30px"></a>
                </div>
        </header>

        <nav id="navMenu">
             <a href="#">Accueil</a></br>
             <hr width="65%" color="white">
             <a href="contact.php">Contact</a>
        </nav>
        <div id="content">
        <?php
        $req = $db->query('SELECT * FROM articles');
        $articles = $req->fetchAll();

        foreach ($articles as $article): ?>
            <div id="newsOne">
                  <img src="http://placehold.it/140x100">
                    <h1 class="title"><?= $article['name'] ?></h1>
                  <p><?= $article['content'] ?> <br /> Par : </p>
            </div>
         <?php endforeach ?>
        </div>

        <footer>
            <p>&copy; 2017 Perspectives Digitales - Tous droits réservés</p>
        </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- JS pour display les news en plein écran + fixation navbar --><script src="js/fulldisplay.js"></script>
<!-- JS pour autotyping du slogan --><script src="js/autotyping-slogan.js"></script>
</body>
</html>