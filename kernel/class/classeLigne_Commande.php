<?php
/**
* Le fichier PHP fait partie du projet Application Commerciale 
* Il sert à définir la classe Ligne_Commande avec son constructeur
* ses accesseurs et ses mutateurs.
* La classe client est la classe mère 
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
public class Ligne_Commande extends model{
	private $numerolignecommande;
	private $qtecommandee;
	private $prixunitaireht;
	private $tva;
	private $idcommande;


	/**
	* Fonction qui sert à déclarer le constructeur de la classe Client
	* 
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function __construct(){
		$this->numerolignecommande='';
		$this->qtecommandee='';
		$this->prixunitaireht='';
		$this->tva='';
	}


	/**
	* Fonction qui sert à donner la valeur du numero de la ligne de la commande
	* @return $numeroLigneCommande = le numero de ligne de la commande
	*
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function getnumerolignecommande(){
		return $this->numerolignecommande;
	}


	/**
	* Fonction qui sert à modifier la valeur du numero de la ligne commande
	* @param $nlignecommande = le nouveau numero de ligne commande
	*
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function setnumerolignecommande($nlignecommande){
		$this->numerolignecommande=$nlignecommande;
	}


	/**
	* Fonction qui sert à donner la valeur de la quantité commandée de la ligne commande
	* @return $qtecommandee = la quantité commandée de la ligne commande
	*
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function getqtecommandee(){
		return $this->qtecommandee;
	}

	/**
	* Fonction qui sert à modifier la valeur de la quantité commandée de la ligne commande
	* @param $qtecommandee = la nouvelle valeur de la quantité commandée de la ligne commande
	*
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function setqtecommande($qtecommandee){
		$this->qtecommandee=$qtecommandee;
	}


	/**
	* Fonction qui sert à donner la valeur de la TVA de la ligne commande
	* @return $tva = la TVA de la ligne commande
	*
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function gettva(){
		return $this->tva;
	}

	/**
	* Fonction qui sert à modifier la valeur de la TVA de la ligne commande
	* @param $tva = la nouvelle valeur de la TVA de la ligne commande
	*
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function settva($tva){
		$this->tva=$tva;
	}

	
	/**
	* Fonction qui sert à donner la valeur de l'id de la commande
	* @return $idcommande = l'id de la commande
	*
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function getidcommande(){
		return $this->idcommande;
	}


	/**
	* Fonction qui sert à modifier la valeur de l'id de la commande 
	* @param $idcommande = la nouvelle valeur de l'id de la commande
	*
	* @author MARCHAND Laëtitia
	* @date 11/10/16
	*/
	function setidcommande($idcommande){
		$this->idcommande=$idcommande;
	}

}


?>