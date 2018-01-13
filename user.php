<?php
class user {
//atributs
private $id_user;
private $nom;
private $prenom;
private $cin;
private $datenaissance;
private $username;
private $password;
private $email;
private $numtelephone;
private $adresse;
private $dateajout;
private $role;
//constructeur



function __construct($nom,$prenom,$cin,$datenaissance,$username,$password,$email,$numtelephone,$adresse){

	$this->nom=$nom;
	$this->prenom=$prenom;
	$this->cin=$cin;
	$this->datenaissance=$datenaissance;
	$this->username=$username;
	$this->password=$password;
	$this->email=$email;
	$this->numtelephone=$numtelephone;
	$this->adresse=$adresse;
}
//getters
function getIduser(){return $this->id_user;}
function getNom(){return $this->nom;}
function getPrenom(){return $this->prenom;}
function getCin(){return $this->cin;}
function getDatenaissance(){return $this->datenaissance;}
function getUsername(){return $this->username;}
function getPassword(){return $this->password;}
function getEmail(){return $this->email;}
function getNumtelephone(){return $this->numtelephone;}
function getAdresse(){return $this->adresse;}
function getDateajout(){return $this->dateajout;}
function getRole(){return $this->role;}
//setters
}
?>
