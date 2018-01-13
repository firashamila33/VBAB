<?php
include ('crudreclamationidee.php');
//session_start();
$sujet=$_POST['sujet'];
$message=$_POST['message'];
$ReclamationsIdees = new ReclamationsIdees($sujet,$message);

$crudreclamationidee = new crudreclamationidee();
$crudreclamationidee->addreclamationidee($ReclamationsIdees,$crudreclamationidee->conn);
header("location:index.php");
?>