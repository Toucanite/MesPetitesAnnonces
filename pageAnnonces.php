<?php
require 'connect.php';
Acces();
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <div>
      <p>Bienvenue <?php echo $_SESSION["login"]?></p>
      <ul class="nav nav-pills">
        <li role="presentation"><a href="Logout.php"><button type="button" class="btn btn-default">Déconnexion</button></a></li>
      </ul>
      
      <?php


      ?>
      </form>
    </div>
  </body>
</html>
