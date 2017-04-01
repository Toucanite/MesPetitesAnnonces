<?php
require 'connect.php';

$titre;
$description;
$prix;
$currency;
$category;
$listAnnonce = array(array());

try
{
  $y=0;
  $request = "SELECT a.Id_Ad, a.Txt_Title, a.Txt_Description, a.Nb_Price, a.Cd_Ccy, c.Nm_Category FROM tbl_Ad a, tbl_ad-cat ac, tbl_category c WHERE a.Id_Ad=ac.Tbl_Ad_Id_Ad AND c.id_Category=ac.Tbl_Category_id_Category ORDER BY a.Id_Ad DESC";
  foreach ($bdd->query($request) as $i) {
           $titre = $i["a.Txt_Title"];
           $description = $i["a.Txt_Description"];
           $prix = $i["a.Nb_Price"];
           $currency = $i["a.Cd_Ccy"];
           $category = $i["c.Nm_Category"];
           $listAnnonce[$y]["titre"] = $i["a.Txt_Title"];
           $listAnnonce[$y]["description"] = $i["a.Txt_Description"];
           $listAnnonce[$y]["prix"] = $i["a.Nb_Price"];
           $listAnnonce[$y]["currency"] = $i["a.Cd_Ccy"];
           $listAnnonce[$y]["category"] = $i["c.Nm_Category"];
           $y+=1;
   }
   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $ins = $bdd->prepare('INSERT INTO tbl_ad (Txt_Title, Txt_Description, Nb_Price, Cd_Ccy, Id_User) VALUES("'.$titre.'", "'.$description.'", "'.$prix.'", "'$currency'", "'.$idUser.'")');
   $ins->execute();



}
catch (PDOException $e)
{
  echo "err" . $e->getMessage();
}
?>
