<?php
session_start(); //Démarre la session

$login = (isset($_REQUEST["login"])?$_REQUEST["login"]:"");
$pass = (isset($_REQUEST["pass"])?$_REQUEST["pass"]:"");
$pass1 = (isset($_REQUEST["pass1"])?$_REQUEST["pass1"]:"");
$id = (isset($_SESSION["id"])?$_SESSION["id"]:"");
$messageErreur = (isset($_SESSION["messageErreur"])?$_SESSION["messageErreur"]:"");
$supMessage = (isset($_REQUEST["supMessage"])?$_REQUEST["supMessage"]:"");
if ($supMessage != "") {
  $messageErreur = "";
}

$bdd = new PDO('mysql:host=localhost;dbname=mydb', "root", ""); //Se conncecte à la base de donnée


function Acces()
{
  if (!isset($_SESSION['login'])) {
    header('location: index.php');
  }
}

function NonAcces()
{
  header('location: pageAnnonces.php');
}

function AlreadyConnected()
{
  if (isset($_SESSION['login'])) {
    header('location: pageAnnonces.php');
  }
}
?>
