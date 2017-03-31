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
      <p>Bienvenue Monsieur <?php echo $_SESSION["login"]?></p>
      <ul class="nav nav-pills">
        <li role="presentation"><a href="Logout.php"><button type="button" class="btn btn-default">Déconnexion</button></a></li>
      </ul>
      <form class="" action="" method="post">
        <div class="form-group">
          <label for="title">Titre</label>
          <input type="text" name="titre" class="form-control" id="title" placeholder="Enter title" required="required">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" name="description" id="description" rows="10" required="required"></textarea>
        </div>
        <div class="form-group">
          <label for="prix">Prix</label>
          <input type="number" name="prix" class="form-control" id="prix" required="required">
        </div>
        <label for="currency">Currency</label>
        <select class="form-control" name="currency" id="currency" required="required">
        	<optgroup label="Base Currency">
        		<option value="CHF" selected="selected">Swiss Franc (CHF)</option>
        	</optgroup>
        	<optgroup label="Major">
            <option value="EUR">Euros (EUR)</option>
        		<option value="USD">US Dollars (USD)</option>
        	</optgroup>
        </select>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>
</html>
