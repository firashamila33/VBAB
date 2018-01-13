<?php
require_once("config.php");
//require_once ("connexion.php");
//include("header.php");
require_once("Reclamationsidees.php");
session_start();
class crudreclamationidee{
public $conn;

	function __construct()
	{
		$c=new configuration();
		$this->conn=$c->getConnexion();
	}

 function addreclamationidee($Reclamationsidees,$conn){
   $req="INSERT INTO `reclamationsidees`( `iduser`, `idreclamation`, `type`, `contenu`, `datereclamation`, `statut`) VALUES
    ('".$_SESSION['id']."','1','".$Reclamationsidees->getType()."','".$Reclamationsidees->getContenu().
       "',CURDATE(),'Encour')";
    $conn->query($req);
    //var_dump($req);
 }

    function showuserreclamationsidees($conn)
    {
        $req ="SELECT reclamationsidees.reponse as r1 , reclamationsidees.datereclamation as r2 , reclamationsidees.contenu as r3 ,
reclamationsidees.statut as r4 , reclamationsidees.type as r5 , user.nom as u1 , user.prenom as u2 , idee.titre as i1
  FROM `reclamationsidees` INNER JOIN user ON  reclamationsidees.iduser=user.id_user INNER JOIN idee  ON idee.id=reclamationsidees.idreclamation  WHERE reclamationsidees.iduser= '".$_SESSION['id']."'";
        $list = $conn->query($req);

        return $result = $list->fetchAll();
    }

    function showreclamationsback($conn){
     $req = "SELECT reclamationsidees.reponse as r1 , reclamationsidees.datereclamation as r2 , reclamationsidees.contenu as r3 ,
reclamationsidees.statut as r4 , reclamationsidees.type as r5 , reclamationsidees.idreclamationsidees as r6 , user.nom as u1 , user.prenom as u2  FROM `reclamationsidees` INNER JOIN user ON  reclamationsidees.iduser=user.id_user ";
        $list = $conn->query($req);
        return $result = $list->fetchAll();
    }

    public function deletereclamationidee($id_reclamationidee,$conn)
    {
        $req = "DELETE FROM `reclamationsidees` WHERE idreclamationsidees = '$id_reclamationidee';";
        $conn->exec($req);
    }
    public function updatereclamationidee($Reclamationsidees,$conn)
    {
        $req = "UPDATE `reclamationsidees` SET reponse='".$Reclamationsidees->getReponse()."',statut='Traite' WHERE id=".$Reclamationsidees->getIdreclamationidee();
        var_dump($req);
        $conn->query($req);
    }
}
?>