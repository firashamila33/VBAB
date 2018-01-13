<?php
include('../../crudContact.php');
$id_contact = $_GET['id_contact'];
$Contact=new crudContact();
$Contact->deletecontact($id_contact,$Contact->conn);
header("location:reclamationsidees.php");