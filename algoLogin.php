<?php
require_once 'connect.php';

try
{
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $verif = "SELECT Id_User, Nm_Last, Txt_Password_Hash, Txt_Password_Salt FROM tbl_user WHERE Nm_Last='$loginTest'";
  foreach ($bdd->query($verif) as $i) {
           if (strcmp(sha1($passTest . $i['Txt_Password_Salt']), $i['Txt_Password_Hash']) == 0) {
               $_SESSION["login"] = $loginTest;
               header("location: home.php");
           }
   }
   if ($loginTest != "") {
     $MessageErreurPass = "Mot de passe incorrect !";
   }
}
catch (PDOException $e)
{
  echo "err" . $e->getMessage();
}
?>
