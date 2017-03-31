<?php
require 'connect.php';

$titre = $_REQUEST["titre"];
$description = $_REQUEST["description"];
$prix = $_REQUEST["prix"];
$currency = $_REQUEST["currency"];

try
{
  $idUser = "SELECT Id_User FROM tbl_user WHERE Nm_Last='$login'";
  foreach ($bdd->query($idUser) as $i) {
           $idUser = $i['Id_User'];
   }
   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $ins = $bdd->prepare('INSERT INTO tbl_ad (Txt_Title, Txt_Description, Nb_Price, Cd_Ccy, Id_User) VALUES("'.$titre.'", "'.$description.'", "'.$prix.'", "'$currency'", "'.$idUser.'")');
   $ins->execute();



  if ($login != "" && $pass != "")
  {
    if ($pass == $pass1) {
      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $ins = $bdd->prepare('INSERT INTO tbl_user (Nm_Last, Txt_Password_Hash, Txt_Password_Salt) VALUES("'.$login.'", "'. sha1($pass.$salt) .'", "'.$salt.'")');
      $ins->execute();
      $_SESSION["login"] = $login;
      header('location: home.php');
    }
    else {
      $MessagePassEquals = "Les mots de passe de correspondent pas !";
      header('location: signup.php');
    }
  }
}
catch (PDOException $e)
{
  echo "err" . $e->getMessage();
}
?>
