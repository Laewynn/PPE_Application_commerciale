<?php
require_once("classeMere.php");
public class Ligne_Commande extends model{
	private $numerolignecommande;
	private $qtecommandee;
	private $prixunitaireht;
	private $tva;
	private $idcommande;

	// Constructeur de la classe Ligne Commande
	function __construct($numerolignecommande, $qtecommandee, $prixunitaireht, $tva){
		$this->numerolignecommande=$numerolignecommande;
		$this->qtecommandee=$qtecommandee;
		$this->prixunitaireht=$prixunitaireht;
		$this->tva->$tva;
	}

	// Accesseurs et Mutateurs du Numero Ligne Commande 
	function getnumerolignecommande(){
		return $this->numerolignecommande;
	}

	function setnumerolignecommande($nlignecommande){
		$this->numerolignecommande=$nlignecommande;
	}

	// Accesseurs et Mutateurs de la Quantité Commandée
	function getqtecommandee(){
		return $this->qtecommandee;
	}

	function setqtecommande($qtecommandee){
		$this->qtecommandee=$qtecommandee;
	}

	// Accesseurs et Mutateurs TVA
	function gettva(){
		return $this->tva;
	}

	function settva($tva){
		$this->tva=$tva;
	}

	// Accesseurs et Mutateurs de l'Identifiant de la Commande
	function getidcommande(){
		return $this->idcommande;
	}

	function setidcommande($idcommande){
		$this->idcommande=$idcommande;
	}

}


?>