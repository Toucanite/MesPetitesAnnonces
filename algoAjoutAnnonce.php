<?php
require 'connect.php';

$titre = $_REQUEST["titre"];
$description = $_REQUEST["description"];
$prix = $_REQUEST["prix"];
$currency = $_REQUEST["currency"];
$category = $_REQUEST["category"]

try
{
  $request = "SELECT Id_User FROM tbl_user WHERE Nm_Last='$login'";
  foreach ($bdd->query($request) as $i) {
           $idUser = $i['Id_User'];
   }
   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $ins = $bdd->prepare('INSERT INTO tbl_ad (Txt_Title, Txt_Description, Nb_Price, Cd_Ccy, Id_User) VALUES("'.$titre.'", "'.$description.'", "'.$prix.'", "'$currency'", "'.$idUser.'")');
   $ins->execute();

   $request = "SELECT Id_Ad FROM tbl_ad WHERE Id_User='$idUser' AND Txt_Title ='$titre' AND Txt_Description='$description'";
   foreach ($bdd->query($request) as $i) {
            $idAd = $i['Id_Ad'];
    }
    $ins = $bdd->prepare('INSERT INTO tbl_ad-cat (Tbl_Ad_Id_Ad, Tbl_Category_id_Category) VALUES("'.$Id_Ad.'", "'.$category.'")');
    $ins->execute();


}
catch (PDOException $e)
{
  echo "err" . $e->getMessage();
}
?>
