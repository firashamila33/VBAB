<?php
include("crudidee.php");
$titre=$_POST['titre'];
$domaine=$_POST['domaine'];
$description=$_POST['description'];
$prix=$_POST['prix'];
$Idee = new Idee( $titre, $domaine, $description, $prix);
$crudidee = new crudidee();
$crudidee->addidee($Idee,$crudidee->conn);
?>