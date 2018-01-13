<?php
class Contact{
//attributs
private $id_contact;
private $sujet;
private $contenu;
private $nom;
private $prenom;
private $numtelephone;
private $email;
private $datecontact;
private $statut;
private $reponse;
//constructeur
function __construct( $sujet,$contenu,$nom,$prenom,$numtelephone,$email,$reponse/*,$datecontact,$statut*/){
   $this->sujet=$sujet;
   $this->contenu=$contenu;
   $this->nom=$nom;
   $this->prenom=$prenom;
   $this->numtelephone=$numtelephone;
   $this->email=$email;
  // $this->datecontact=$datecontact;
  //$this->statut=$statut;
   $this->reponse=$reponse;
}
//getters
function getIdcontact(){return $this->id_contact;}
function getSujet(){return $this->sujet;}
function getContenu(){return $this->contenu;}
function getNom(){return $this->nom;}
function getPrenom(){return $this->prenom;}
function getNumtelephone(){return $this->numtelephone;}
function getEmail(){return $this->email;}
function getDatecontact(){return $this->datecontact;}
function getStatut(){return $this->statut;}
function getReponse(){return $this->reponse;}
//setters
function setIdcontact($id_contact){$this->id_contact=$id_contact;}
function setISujet($sujet){$this->sujet=$sujet;}
function setContenu($contenu){$this->contenu=$contenu;}
function setNom($nom){$this->nom=$nom;}
function setPrenom($prenom){$this->prenom=$prenom;}
function setNumtelephone($numtelephone){$this->numtelephone=$numtelephone;}
function setEmail($email){$this->email=$email;}
function setDatecontact($datecontact){$this->datecontact=$datecontact;}
function setStatut($statut){$this->statut=$statut;}
function setReponse($reponse){$this->reponse=$reponse;}

}


?>