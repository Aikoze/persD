<?php session_start();

ini_set('display_errors', 1);

require_once '../database.php';
require_once '../fonctions.php';

if (!$_SESSION['admin']) {
header('location:login.php');
}
if (!empty($_POST)) {
    if(empty($_POST['password']) || $_POST['password'] != $POST['password_confirm']){
        $_SESSION['flash']['error'] = "Les mots de passesss ne correspondent pas";
    }else{
        $user_id = $_SESSION['admin']->id;
        $password = password_hash($_POST['passwod'], PASSWORD_BCRYPT);
     $db->prepare('UPDATE users SET password = ? where id = ?')->execute([$password, $user_id]);
     $_SESSION['flash']['success'] = "Votre mot de passe a bien été mis à jour";

    }
}
       $req= $db->query('SELECT * FROM users');
        $author = $req->fetch();

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/backoffice.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title>Perspectives digitales</title>
</head>
<body>
        <header>
                <div id="banner">

                    <h1>perspectives digitales</h1>
                </div>

        </header>

        <div id="content">
        <h3>bienvenue <?= $author['pseudo'] ?></h3>
          </br>

            <form method="post" action="">
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Changer de mot de passe"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password_confirm" placeholder="confirmation du mot de passe"/>
                    </div>
                    <button class="btn btn-primary">Changer mon mot passe</button>
            </form>


        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>