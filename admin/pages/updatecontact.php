<?php
include('../../crudContact.php');
$id=$_POST['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$numtelephone=$_POST['numtelephone'];
$email=$_POST['email'];
$sujet=$_POST['sujet'];
$contenu=$_POST['contenu'];
$reponse=$_POST['reponse'];
$Contact = new Contact($sujet,$contenu,$nom,$prenom,$numtelephone,$email,$reponse);
$Contact->setIdcontact($id);
$crudContact = new crudContact();
$crudContact->updatecontact($Contact,$crudContact->conn);
header("location:contact.php");

?>