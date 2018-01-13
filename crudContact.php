<?php
require_once("config.php");
require_once("Contact.php");

class crudContact{
public $conn;
	function __construct()
	{
		$c=new configuration();
		$this->conn=$c->getConnexion();
	}
 
 function addcontact($Contact,$conn){
   $req="INSERT INTO `contact`(`sujet`, `contenu`, `nom`, `prenom`, `numtelephone`, `email`, `datecontact`, `statut`) VALUES
    ('".$Contact->getSujet()."','".$Contact->getContenu()."','".$Contact->getNom()."','".$Contact->getPrenom()."','".$Contact->getNumtelephone()."','".$Contact->getEmail()."',CURDATE(),'Encour')";
    $conn->query($req);
 }
 function showcontact($conn)
	{
		$req ="SELECT * FROM `contact`";
		$list = $conn->query($req);

		return $result = $list->fetchAll();
	}

function showuserchat($conn)
{
    $req ="SELECT user.nom as u1 , user.prenom as u2 , user.cin as u3 , user.email as u4 , messages.id_membre as m1 
     FROM user INNER JOIN messages ON user.id_user=messages.id_membre  GROUP BY messages.id_membre";
    $list = $conn->query($req);

    return $result = $list->fetchAll();
}
 public function deletecontact($id_contact,$conn)
	{
		$req = "DELETE FROM `contact` WHERE id = '$id_contact';";
		$conn->exec($req);
	}
	public function updatecontact($Contact,$conn)
	{
		$req = "UPDATE `contact` SET reponse='".$Contact->getReponse()."',statut='Traite' WHERE id=".$Contact->getIdcontact();
		var_dump($req);
		$conn->query($req);
	}
}
?>