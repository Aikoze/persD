<?php
session_start() ;

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/backoffice.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <title>Perspectives digitales</title>
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=rjaug1ry9q8fpapho7hq8c03v9p62ijv6tevkm1h0te3q1o0'></script>
    <script>
      tinymce.init({
        selector: 'textarea'
      });
  </script>
</head>
<body>
    <?php
        try
        {
            $req_id = $db->query('SELECT users.id, articles.user_id FROM users INNER JOIN articles ON users.id = articles.user_id');
            echo "connection success";
        }
        catch(PDOException $e)
        {
            echo "connection failed". $e->getMessage();
        }
        require_once '../database.php';
        if (!isset($_SESSION[ 'admin' ]) || empty($_SESSION['admin'])){
        header('location:index.php');
       }
        require_once '../fonctions.php';

       $article = getArticle($db, 1,$_GET[ 'id' ]);
       if (!isset($_GET[ 'id' ])) {
            header('location:index.php');
       }

        $messages = [];
       if (isset($_POST) AND !empty($_POST)) {
             if (!empty($_POST['name']) AND !empty($_POST['content'])) {
                $req = $db->prepare('UPDATE articles SET name = :name, content = :content WHERE id = :id');
                $req->execute([
                    'name' => $_POST['name'],
                    'content' => $_POST['content'],
                    'id' => $_GET['id']
                ]);
                $messages['flash']['success'] = 'Article modifié !';
                $article = getArticle($db, 1,$_GET[ 'id' ]);
             }else{
                $messages['flash']['error'] = 'Champs manquants !';
             }
       }
    ?>
        <header>
                <div id="banner">

                    <h1>perspectives digitales</h1>
                </div>
        <a href="index.php">Revenir aux articles</a>
        </header>
        <?php
        if (isset($messages['flash']['success'])) {
            echo "<div class='success'>".$messages['flash']['success'].'</div>';
        }
        elseif (isset($messages['flash']['error'])) {
            echo "<div class='error'>".$messages['flash']['error'].'</div>';
        }

        ?>

        <form method="POST">
            Nom de l'article (140 caractères max ) :<input type="text" name="name" value="<?= $article->name ?>"><br />
            Votre pseudo : <input type="text" name="pseudo" value="<?= $article->pseudo ?>">
            <textarea cols="70" rows="20" name="content"><?= $article->content ?></textarea><br />
            <button>Modifier</button>

        </form>


</body>
</html>