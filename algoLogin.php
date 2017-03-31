<?php
require 'connect.php';

try
{
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $verif = "SELECT Id_User, Nm_Last, Txt_Password_Hash, Txt_Password_Salt FROM tbl_user WHERE Nm_Last='$login'";
  foreach ($bdd->query($verif) as $i) {
           if (strcmp(sha1($pass . $i['Txt_Password_Salt']), $i['Txt_Password_Hash']) == 0) {
               $_SESSION["login"] = $login;
               header("location: home.php");
           }
           else {
             header("location: index.php");
           }
   }
}
catch (PDOException $e)
{
  echo "err" . $e->getMessage();
}
?>
