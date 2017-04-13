<?php session_start() ?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/backoffice.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title>Perspectives digitales</title>
</head>
<body>
    <?php
        require_once '../database.php';
        if (!$_SESSION['admin']) {
            header('location:login.php');
        }
        require_once '../fonctions.php'
    ?>
        <header>
                <div id="banner">

                    <h1>perspectives digitales</h1>
                </div>

        </header>

        <div id="content">
        <h3>bienvenue <?= $_SESSION['admin'] ?></h3>
        <?php
        $req = $db->query('SELECT * FROM articles');
        $articles = $req->fetchAll();
        ?>
        <table border="1px">
        <?php
        foreach ($articles as $article): ?>

        <tr><td><img src="http://placehold.it/140x100"></td>
                   <td><?= $article['name'] ?></td>
                 <td> <p><?= chaineCoupee( $article['content']) ?> <br /> Par : <?= $article ['pseudo'] ?></p></td>
                 <td><a href="modify_article.php?id=<?= $article[ 'id' ]?>">Modifier l'article</a></td>
        </tr>
         <?php endforeach ?>
         </table>

        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>