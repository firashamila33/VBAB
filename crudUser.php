<?php
require_once("config.php");
require_once("user.php");

class crudUser{
public $conn;
	function __construct()
	{
		$c=new configuration();
		$this->conn=$c->getConnexion();
	}
 
 function adduser($user,$conn){
   $req="INSERT INTO `user`( `nom`, `prenom`, `cin`, `datenaissance`, `username`, `password`, `email`, `numtelephone`, `adresse`, `dateajout`, `role`) VALUES
    ('".$user->getNom()."','".$user->getPrenom()."','".$user->getCin()."','".$user->getDatenaissance()."','".$user->getUsername()."','".$user->getPassword()."','".$user->getEmail()."','".$user->getNumtelephone()."','".$user->getAdresse()."',CURDATE(),'Client')";
    //var_dump($req);
    $conn->query($req);
 }
 function afficheuser($conn)
	{
		$req ="SELECT * FROM `user`";
		$list = $conn->query($req);
		return $result = $list->fetchAll();
	}
}
?>