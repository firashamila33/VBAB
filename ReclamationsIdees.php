<?php
class ReclamationsIdees{
//attributs 
private $id_reclamationidee;
private $id_user;
private $id_reclamation;
private $type;
private $contenu;
private $datereclamationidee;
private $statut;
private $reponse;
//constructeur
function __construct($type,$contenu){
	
	$this->type=$type;
	$this->contenu=$contenu;
	
}
//getters
function getIdreclamationidee(){return $this->id_reclamationidee;}
function getIduser(){return $this->id_user;}
function getIdreclamation(){return $this->id_reclamation;}
function getType(){return $this->type;}
function getContenu(){return $this->contenu;}
function getDatereclamationidee(){return $this->datereclamationidee;}
function getStatut(){return $this->statut;}
function getReponse(){return $this->reponse;}
}
function setIduser($id_user){$this->id_user=$id_user;}
?>