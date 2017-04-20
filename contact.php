<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title>Contact</title>
</head>

  <?php
    /* session_start();

    if (isset($_SESSION['last_submit']) && time()-$_SESSION['last_submit'] < 180) {
    echo "<p style='background-color: white; color: red; text-align: center; font-weight: bold; border-radius: 20px 20px 20px 20px; padding-top: 1em; padding-bottom: 1em'>Vous venez d'envoyer un message. Veuillez attendre 180 secondes avant de pouvoir renvoyer un message.</p>";
    return;
    }
    else {
    $_SESSION['last_submit'] = time();
  } */

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: PersDigit';
    $to = 'theo.w@free.fr';
    $subject = 'Nouvelle prise de contact - Perspectives Digitales';

    $body = "Expéditeur: $name\n Adresse mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
      if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
        echo "<p style='background-color: white; color: red; text-align: center; font-weight: bold; border-radius: 20px 20px 20px 20px; padding-top: 1em; padding-bottom: 1em'>Tous les champs doivent être remplis, veuillez s'il vous plaît réessayer.</p>";
        return;
      }
      else if (mail ($to, $subject, $body, $from)) {
        echo "<p style='background-color: white; color: green; text-align: center; font-weight: bold; border-radius: 20px 20px 20px 20px; padding-top: 1em; padding-bottom: 1em'>Votre message a bien été envoyé : nous vous recontacterons dans les plus brefs délais.</p>";
      } else {
        echo "<p style='background-color: white; color: red; text-align: center; font-weight: bold; border-radius: 20px 20px 20px 20px; padding-top: 1em; padding-bottom: 1em'>Quelque chose n'a pas fonctionné, veuillez s'il vous plaît réessayer.</p>";
      }
    }
  ?>

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
       <a href="index.php">Accueil</a></br>
       <hr width="65%" color="white">
       <a href="contact.php">Contact</a>
   </nav>

   <div id="contactForm">
    <h2>Vous souhaitez partager une actualité avec nous ? Rejoindre notre équipe ?<br /> Une simple demande de renseignements ?</h2><br />
    <h3>N'hésitez pas à nous contacter !</h3>
    <div id="form-main">
        <div id="form-div">
          <form method="post" class="form" id="form1" action="contact.php">
            <p class="name">
              <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Nom" id="name" />
          </p>

          <p class="email">
              <input name="email" type="email" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Adresse e-mail" />
          </p>

          <p class="text">
              <textarea name="message" class="validate[required,length[6,800]] feedback-input" id="comment" placeholder="Votre message"></textarea>
          </p>

          <div class="submit">
              <input name="submit" type="submit" value="Envoyer votre message" id="button-blue"/>
              <div class="ease"></div>
          </div>
      </form>
  </div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- JS pour display les news en plein écran + fixation navbar --><script src="js/fulldisplay.js"></script>
<!-- JS pour autotyping du slogan --><script src="js/autotyping-slogan.js"></script>
</body>
</html>