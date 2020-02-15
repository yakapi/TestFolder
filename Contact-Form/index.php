<?php
if (isset($_POST['nom']) && isset($_POST['mail-e']) && isset($_POST['mess']))
{
  try{
    $bdd = new PDO("mysql:dbname=portfolio;host=localhost;charset=utf8", "root", "");
    $query_user = $bdd->prepare('INSERT INTO contact (nom, email, message) VALUES (:nom, :mail, :message)');
    $query_user->bindValue("nom", $_POST['nom']);
    $query_user->bindValue("mail", $_POST['mail-e']);
    $query_user->bindValue("message", $_POST['mess']);
    $query_user->execute();
    $to_owner = 'milena.wachtel@yahoo.fr';
    $subject = 'Un message de votre portoflio';
    $message = $_POST['mess'];

    // mail($to_owner, $subject, $message);

    $to_user = $_POST['mail-e'];
    $subject_u = 'Accuser de réception';
    $message_u = 'Nous vous repondons dans les plus bref delais';

    // mail($to_user, $subject_u, $message_u);


    echo 'send';
  }catch (Exception $e){
    echo 'sorry dead link';
  };
};

 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="src/style.css">
  <title>Formulaire</title>
</head>
<body>

  <form action="index.php" method="POST" id="formulaire">
    <div class="input-form">
      <input class="keydown-reload" type="text" id="nom" name="nom" placeholder="votre nom">
      <div class="failed"></div>
    </div>
    <div class="input-form">
      <input class="keydown-reload" type="email" id="email" name="mail-e" placeholder="votre email">
      <div class="failed"></div>
    </div>
    <div class="input-form">
      <textarea class="keydown-reload" id="message" cols="30" name="mess" rows="10" placeholder="Votre message"></textarea>
      <div class="failed"></div>
    </div>
    <div class="input-form">
      <input type="submit" value="Envoyer !" id="envoyer">
      <div class="failed"></div>
    </div>
  </form>

  <script src="src/script.js"></script>
</body>
</html>
