<?php
require 'connect.php';
Acces();

$_SESSION["messageErreur"] = "";

try
{
  if ($login != "" && $pass != "")
  {
    $salt = uniqid();

    $login_Exist = $bdd->prepare("SELECT Nm_Last FROM tbl_user WHERE Nm_Last = :login");
    //On recupère les pseudo de t'as base ou les pseudo son egal au pseudo passer par le formulaire
    $login_Exist->bindValue('login', $login, PDO::PARAM_STR);
    $login_Exist->execute();
    //on exécute la requête

    $pseudoINbdd = $login_Exist->rowCount();
    //Rowcount permet de sortir le nombre de valeur que t'as requête renvoi, que l'on rentre dans la variable pseudoINbdd (ou autre )

    if($pseudoINbdd == 0)
    {
      if ($pass == $pass1) {
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $insert = $bdd->prepare('INSERT INTO tbl_user (Nm_Last, Txt_Password_Hash, Txt_Password_Salt) VALUES("'.$login.'", "'. sha1($pass.$salt) .'", "'.$salt.'")');
        $insert->execute();
        $_SESSION["login"] = $login;

        $request = "SELECT Id_User, Nm_Last, Txt_Password_Hash, Txt_Password_Salt FROM tbl_user WHERE Nm_Last='$login'";
        foreach ($bdd->query($request) as $i) {
            $_SESSION["id"] = $i["Id_User"];
         }

        header('location: pageAnnonces.php');
      }
      else {
        $_SESSION["messageErreur"] = "Les mots de passe de correspondent pas !";
        header('location: signup.php');
      }
    }
    else {
      $_SESSION["messageErreur"] = "Ce login est déja utilisé !";
      header('location: signup.php');
    }
  }

}
catch (PDOException $e)
{
  echo "err" . $e->getMessage();
}
?>
