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
    ?>
        <header>
                <div id="banner">

                    <h1>perspectives digitales</h1>
                </div>

        </header>
        <div id="content">
        <h3>Se connecter :</h3>
        <?php
        if (isset($_POST) AND !empty($_POST)) {
            if (!empty(htmlspecialchars($_POST['username']) AND !empty($_POST['password']))) {
                $req = $db->prepare('SELECT * FROM users WHERE username = :username AND password = SHA1 (:password)');
                 $req->execute([
                        'username' => $_POST[ 'username' ],
                        'password' => $_POST[ 'password' ] . 'salage'

                    ]);
                 $user = $req->fetch();
                 if ($user) {
                    $_SESSION['admin'] = $_POST['username'];
                     header('location:index.php');
                 }else{
                    $error = 'Identifiants incorrect';
                 }
            }
            else{
                $error = 'Veuillez remplir tous les champs !';
            }
        }
        if (isset($error)) {
            echo '<div class="error">' . $error .'</div>';
        }
        ?>
        <form action="login.php" method="POST">
            <input type="text" name="username"/>
            <input type="password" name="password" />
            <button>Se connecter</button>
        </form>

        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>