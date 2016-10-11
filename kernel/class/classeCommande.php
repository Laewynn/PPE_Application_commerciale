<?php
require_once("classeMere.php");
class Commande extends model{
	private $idcommande;
	private $datecommande;
	private $datelivraison;
	private $adresselivraison;
	private $cplivraison;
	private $villelivraison;
	private $fraisdeport;
 
	// Constructeur de la classe Commmande
	function __construct($idcommande, $datecommande, $datelivraison, $adresselivraison, $cplivraison, $villelivraison, $fraisdeport) {
		$this->idcommande=$idcommande;
		$this->datecommande=$Date;
		$this->datelivraison=$datelivraison;
		$this->adresselivraison=$adresselivraison;
		$this->cplivraison=$cplivraison;
		$this->villelivraison=$villelivraison;
		$this->fraisdeport=$fraisdeport;
	}
    
    // Accesseurs et Mutateurs de l'ID du CLient
		function getIDClient(){
  		return $this->$idcommande;
  	}
	
  	function setIDClient($id){
  		$this->idcommande=$id;
  	}
	
	// Accesseurs et Mutateurs de la date de la commande
  	function getDateCommande(){
  		return $this->$datecommande;
  	}
  	function setDateCommande($DateC){
  		 $this->datecommande=$DateC;
  	}
	
	// Accesseurs et Mutateurs de la date de livraison
  	function getDateLivraison(){
  		return $this->$datelivraison;
  	}
  	function setDateLivraison($DateL){
  		 $this->$datelivraison=$DateL;
  	}
	
	// Accesseurs et Mutateurs de l'adresse de livraison
  	function getAdresseLivraison(){
  		return $this->$adresselivraison;
  	}
  	function setAdresseLivraison($AdresseL){
  		$this->$adresselivraison=$AdresseL;
  	}
	
	// Accesseurs et Mutateurs du code postal de la livraison
  	function getCPLivraison(){
  		return $this->$cplivraison;
  	}
	
    	function setCPLivraison($CPL){
      		$this->cplivraison=$CPL;
    	}
	
	// Accesseurs et Mutateurs de la ville de la livraisonj
	function getVilleLivraison(){
	        return $this->villelivraison;
	}
	
	function setVilleLivraison($VilleL){
	        $this->villelivraison=$VilleL;
	}
	
	// Accesseurs et Mutateurs des frais de port 
	function getFraisDePort(){
	        return $this->fraisdeport;
	}
	
	function setFraisDePort($FraisDP){
	        $this->fraisdeport=$FraisDP;
	 }
}
