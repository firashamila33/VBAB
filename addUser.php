<?php
include('crudUser.php');

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$cin=$_POST['cin'];
$datenaissance=$_POST['datenaissance'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$numtelephone=$_POST['numtelephone'];
$adresse=$_POST['adresse'];
$user = new user($nom,$prenom,$cin,$datenaissance,$username,$password,$email,$numtelephone,$adresse);
$crudUser = new crudUser();
$crudUser->addUser($user,$crudUser->conn);
header("location:login.php");

?>