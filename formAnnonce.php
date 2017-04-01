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
        <li role="presentation"><a href="pageAnnonce.php"><button type="button" class="btn btn-default">Voir les annonces</button></a></li>
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
        <select name="category" class="from-control" required="required">
          <option value="1">Animaux</option>
          <option value="2">Art - Antiquités</option>
          <option value="3">Automobiles</option>
          <option value="4">Beauté - Bien-être</option>
          <option value="5">Bébé - Puériculture</option>
          <option value="6">Bijouterie - Horlogerie</option>
          <option value="7">Billets - Bons</option>
          <option value="8">Camping</option>
          <option value="9">Cinéma - DVD</option>
          <option value="10">Collections</option>
          <option value="12">Divers</option>
          <option value="13">Emploi</option>
          <option value="14">Immobilier</option>
          <option value="15">Informatique</option>
          <option value="16">Jeux - Jouets</option>
          <option value="17">Jeux vidéo</option>
          <option value="18">Livres - BD - Revues</option>
          <option value="19">Maison - Jardin - Bricolage</option>
          <option value="20">Modélisme</option>
          <option value="21">Motos - Scooters</option>
          <option value="22">Musique - Instruments</option>
          <option value="23">Nautisme</option>
          <option value="24">Photo - Caméras</option>
          <option value="25">PME Artisans Agriculteurs</option>
          <option value="26">Sport - Loisirs</option>
          <option value="27">Téléphonie</option>
          <option value="28">TV - Son - Home cinema</option>
          <option value="29">Vacances - Voyages</option>
          <option value="30">Vêtements</option>
          <option value="31">Vins - Gastronomie</option>
        </select>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>
</html>
