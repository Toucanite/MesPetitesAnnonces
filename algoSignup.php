<?php
require_once 'connect.php';

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
        $ins = $bdd->prepare('INSERT INTO tbl_user (Nm_Last, Txt_Password_Hash, Txt_Password_Salt) VALUES("'.$login.'", "'. sha1($pass.$salt) .'", "'.$salt.'")');
        $ins->execute();
        $_SESSION["login"] = $login;
        header('location: home.php');
      }
      else {
        $MessagePassEquals = "Les mots de passe de correspondent pas !";
      }
    }
    else {
      $MessageLoginExiste = "Ce login est déja utilisé !";
    }
  }

}
catch (PDOException $e)
{
  echo "err" . $e->getMessage();
}
?>
