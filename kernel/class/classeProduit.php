<?php
require_once("classeMere.php");
public class Produit extends model{
	private $idproduit;
	private $nomproduit;
	private $descriptionproduit;
	private $prixunitaireht;
	private $tva;
	private $qteenstock;

	// Constructeur de la classe Produit
	function __construct($idproduit, $nomproduit, $descriptionproduit, $prixunitaireht, $tva, $qteenstock){
		$this->idproduit=$idproduit;
		$this->nomproduit=$nomproduit;
		$this->descriptionproduit=$descriptionproduit;
		$this->prixunitaireht=$prixunitaireht;
		$this->tva=$tva;
		$this->qteenstock=$qteenstock;
	}

	// Accesseurs et Mutateurs IDProduit
	function getidproduit(){
		return $this->idproduit;
	}

	function setidproduit($idproduit){
		$this->idproduit=$idproduit;
	}

	// Accesseurs et Mutateurs du NomProduit
	function getnomproduit(){
		return $this->nomproduit;
	}


	function setnomproduit($nomproduit){
		$this->nomproduit=$nomproduit;
	}
	// Accesseurs et Mutateurs de la DescriptionProduit
	function getdescriptionproduit(){
		return $this->descriptionproduit;
	}


	function setdescriptionproduit($descriptionproduit){
		$this->descriptionproduit=$descriptionproduit;
	}

	// Accesseurs et Mutateurs du Prix Unitaire HT
	function getprixunitaireht(){
		return $this->prixunitaireht;
	}

	function setprixunitaireht($prixunitaireht){
		$this->prixunitaireht=$prixunitaireht;
	}

	// Accesseurs et Mutateurs TVA
	function gettva(){
		return $this->tva;
	}

	function settva($tva){
		$this->tva=$tva;
	}

	// Accesseurs et Mutateurs QteEnStock
	function getqteenstock(){
		return $this->qteenstock;
	}

	function setqteenstock($qteenstock){
		$this->qteenstock=$qteenstock;
	}
	}

	?>