<?php
/**
* Le fichier PHP fait partie du projet Application Commerciale 
* Il sert à définir la classe Produit avec son constructeur,
* ses accesseurs et ses mutateurs.
* @datedernièremodification : 11 octobre 2016
* @since 20 septembre 2016
* @author Laëtitia Marchand <laetitiamarchand35@gmail.com>
*/

	/**
	* La classe Ligne_Commande permet de gérer la table ligne_commande du projet Application Commerciale.
	*
	* @author Laëtitia Marchand <laetitiamarchand35@gmail.com>
	*/
require_once("classeMere.php");
class Produit extends model{
	protected $idproduit;
	protected $nomproduit;
	protected $description;
	protected $prixunitaireht;
	protected $tva;
	protected $qteenstock;
	protected $idcategorie;
	protected $image;


	
	/**
	* Fonction qui sert à déclarer le constructeur de la classe Produit
	* 
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function __construct(){
		parent::__construct('produit', 'idproduit', true); // savoir si le nom de la table est auto-incrémenté
		$this->tab = 'produit';
		$this->primary = 'idproduit';
		$this->idproduit='';
		$this->nomproduit='';
		$this->description='';
		$this->prixunitaireht='';
		$this->tva='';
		$this->qteenstock='';
		$this->idcategorie='';
		$this->image='';
		
	}


	/**
	* Fonction qui sert à donner la valeur de l'id du produit
	* @return $idproduit = l'id du produit
	*
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function getidproduit(){
		return $this->idproduit;
	}

	/**
	* Fonction qui sert à modifier la valeur de l'id du produit
	* @param $idproduit = le nouvel id du produit
	*
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function setidproduit($idproduit){
		$this->idproduit=$idproduit;
	}

	
	/**
	* Fonction qui sert à donner la valeur du nom du produit
	* @return $nomproduit = le nom du produit
	*
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function getnomproduit(){
		return $this->nomproduit;
	}


	/**
	* Fonction qui sert à modifier la valeur du nom du produit
	* @param $nomproduit = le nouveau nom du produit
	*
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function setnomproduit($nomproduit){
		$this->nomproduit=$nomproduit;
	}


	/**
	* Fonction qui sert à donner la valeur de la description du produit
	* @return $descriptionproduit = la description du produit
	*
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function getdescription(){
		return $this->description;
	}


	/**
	* Fonction qui sert à modifier la valeur la description du produit
	* @param $descriptionroduit = la nouvelle description du produit
	*
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function setdescription($description){
		$this->description=$description;
	}


	/**
	* Fonction qui sert à donner la valeur du prix unitaire hors-taxe du produit
	* @return $prixunitairehht = le prix unitaire hors-taxe du produit
	*
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function getprixunitaireht(){
		return $this->prixunitaireht;
	}


	/**
	* Fonction qui sert à modifier la valeur du prix unitiare hors-taxe du produit
	* @param $prixunitaireht = le nouveau prix unitaire hors-taxe du produit
	*
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function setprixunitaireht($prixunitaireht){
		$this->prixunitaireht=$prixunitaireht;
	}

	
	/**
	* Fonction qui sert à donner la valeur de la TVA du produit
	* @return $tva = la TVA du produit
	*
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function gettva(){
		return $this->tva;
	}


	/**
	* Fonction qui sert à modifier la valeur de la TVA du produit
	* @param $tva = la nouvelle TVA du produit
	*
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function settva($tva){
		$this->tva=$tva;
	}

	/**
	* Fonction qui sert à donner la valeur de la quantité en stock du produit
	* @return $qteenstock = la quantité en stock du produit
	*
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function getqteenstock(){
		return $this->qteenstock;
	}

	/**
	* Fonction qui sert à modifier la valeur de la quuantité en stock du produit
	* @param $qteenstock = la nouvelle quantité en stock du produit
	*
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function setqteenstock($qteenstock){
		$this->qteenstock=$qteenstock;
	}
	
	/**
	* Fonction qui sert à donner la valeur de la catégorie
	* @return $idcategorie = l'id du produit
	*
	* @author MARCHAND Laëtitia
	* @date 15/11/16
	*/
	function getidcategorie(){
		return $this->idcategorie;
	}


	/**
	* Fonction qui sert à modifier la valeur de l'id de la catégorie
	* @param $idcategorie = le nouvel id de la catégorie
	*
	* @author MARCHAND Laëtitia
	* @date 15/11/16
	*/
	function setidcategorie($idcategorie){
		$this->idcategorie=$idcategorie;
	}
	

	/**
	* Fonction qui sert à donner la valeur de l'image
	* @return $image = l'image du produit
	*
	* @author MARCHAND Laëtitia
	* @date 18/10/16
	*/
	function getimage(){
		return $this->image;
	}


	/**
	* Fonction qui sert à modifier la valeur de l'image du produit
	* @param $image= la nouvelle image du produit
	*
	* @author MARCHAND Laëtitia
	* @date 18/10/16
	*/
	function setimage($image){
		$this->image=$image;
	}


	
}

?>