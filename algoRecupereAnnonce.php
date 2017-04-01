<?php
require 'connect.php';

$titre;
$description;
$prix;
$currency;

try
{
  $request = "SELECT Id_ad FROM tbl_user WHERE Nm_Last='$login'";
  foreach ($bdd->query($request) as $i) {
           $idUser = $i['Id_User'];
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
