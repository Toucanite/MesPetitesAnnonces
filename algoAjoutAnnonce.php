<?php
require 'connect.php';
Acces();

$idUser = "";

if ((!isset($_REQUEST["titre"])) || (!isset($_REQUEST["description"])) || (!isset($_REQUEST["prix"])) || (!isset($_REQUEST["currency"])) || (!isset($_REQUEST["category"]))) {
  header('Location: formAnnonce.php');
}
else {
  $titre = $_REQUEST["titre"];
  $description = $_REQUEST["description"];
  $prix = $_REQUEST["prix"];
  $currency = $_REQUEST["currency"];
  $category = $_REQUEST["category"];
}

try
{
  $request = "SELECT Id_User FROM tbl_user WHERE Nm_Last='$login'";
  foreach ($bdd->query($request) as $i) {
          $idUser = $i['Id_User'];
  }
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $insert = $bdd->prepare(' INSERT INTO tbl_ad (Txt_Title, Txt_Description, Nb_Price, Cd_Ccy, Dttm_Creation, Id_User)
                            VALUES("'.$titre.'", "'.$description.'", "'.$prix.'", "'.$currency.'", "'.date("Y-m-d H:i:s").'", "'.$_SESSION["id"].'")');
  $insert->execute();

  $requeteAd = $bdd->query('SELECT * FROM tbl_ad WHERE Txt_Title ="'.$titre.'"');
  $colonnesAd = $requeteAd->fetch();
  $idAd = $colonnesAd["Id_Ad"];

  $insert = $bdd->prepare('INSERT INTO `tbl_ad-cat` (`Tbl_Ad_Id_Ad`, `Tbl_Category_id_Category`) VALUES("'.$idAd.'", "'.$category.'")');
  $insert->execute();

  header('Location: pageAnnonces.php');
}
catch (PDOException $e)
{
    echo "err" . $e->getMessage();
}
?>
