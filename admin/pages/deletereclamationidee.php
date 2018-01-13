<?php
include('../../crudreclamationidee.php');
$id_reclamationidee = $_GET['id_reclmationidee'];
$reclamationidee=new crudreclamationidee();
$reclamationidee->deletereclamationidee($id_reclamationidee,$reclamationidee->conn);
header("location:reclamationsidees.php");