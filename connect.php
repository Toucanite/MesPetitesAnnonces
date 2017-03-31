<?php
session_start(); //Démarre la session

$login = (isset($_REQUEST["login"])?$_REQUEST["login"]:"");
$pass = (isset($_REQUEST["pass"])?$_REQUEST["pass"]:"");
$pass1 = (isset($_REQUEST["pass1"])?$_REQUEST["pass1"]:"");

$MessageErreurLogin = "";
$MessageErreurPass = "";
$AlertTentative = "";
$MessageLoginExiste = "";
$MessagePassEquals = "";

$bdd = new PDO('mysql:host=localhost;dbname=mydb', "root", ""); //Se conncecte à la base de donnée
?>
