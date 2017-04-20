<?php session_start();

ini_set('display_errors', 1);

require_once '../database.php';
require_once '../fonctions.php';
include_once(__DIR__.'/PHPMailer/PHPMailerAutoload.php');

if (!$_SESSION['admin']) {
header('location:login.php');
}

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

        <a href="index.php">Revenir aux articles</a>

        <div id="add_user">
        <form method="POST">
        entrez l'adresse du nouvel utilisateur : <input type="text" name="email">
        <button>envoyer la demande d'administration</button>
        </form>
        </div>

        <?php
        if (isset($_POST['email'])) {
        $pseudo = 'unamed';
        $email = $_POST['email'];
        $password = Genere_Password(10);
        $rand_password = $password . 'salage';
        preg_match($pattern, $email);

        $req = $db->prepare("INSERT INTO `solutionstress`.`users` (`id`, `username`, `password`, `pseudo`) VALUES (NULL, :email, SHA1(:rand_password), :pseudo)");
        $req->execute(array(':email' => $email, ':rand_password' => $rand_password, ':pseudo' => $pseudo));

        $mail = new PHPMailer;

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isMail();                                      // Set mailer to use SMTP

        $mail->SetFrom('perspectivedigitale@gmail.com', 'Perspectives Digitales');
        $mail->addAddress($_POST['email']);

        $mail->Subject = "Confirmation de creation d'un compte Auteur";
        $mail->Body    = "Bienvenue, merci de vous connecter avec l'adresse mail suivante : " . $email . "<br> et le mot de passe suivant : " . $password;
        $mail->AltBody = 'test';

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo "<div class='success'>Les identifiants ont bien été transmis.</div>";
        };

        }

        ?>

</body>
</html>