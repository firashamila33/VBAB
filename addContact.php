<?php
include ('crudContact.php');
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$numtelephone=$_POST['numtelephone'];
$email=$_POST['email'];
$sujet=$_POST['sujet'];
$message=$_POST['message'];
$Contact = new Contact($sujet,$message,$nom,$prenom,$numtelephone,$email);
$crudContact = new crudContact();
$crudContact->addcontact($Contact,$crudContact->conn);
header("location:contactus.php");
?>