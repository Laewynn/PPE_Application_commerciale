<?php
/**
* Le fichier PHP fait partie du projet Application Commerciale 
* Il sert à définir la classe Client avec son constructeur
* ses accesseurs et ses mutateurs.
* La classe client est la classe mère 
* @datedernièremodification : 27 septembre 2016
* @since 20 septembre 2016
* @author Laëtitia Marchand <laetitiamarchand35@gmail.com>
*/


/**
 * La classe Client permet de gérer la table client du projet Application Commericiale.
 *
 * @author Laëtitia Marchand <laetitiamarchand35@gmail.com>
 */
require_once("classeMere.php");
class Client extends model {
	protected $idclient;
	protected $nomclient;
	protected $prenomclient;
	protected $adresseclient;
	protected $cpclient;
	protected $villeclient;
	protected $telephoneclient;
	protected $mailclient;
	

	/**
    * Fonction qui sert à déclarer le constructeur de la classe Client
    * @param $idclient =  l'identifiant du client
    * @param $nomclient = le nom du client  
    * @param $prenomclient = le prénom du client
    * @param $adresseclient = l'adresse du client
    * @param $cpclient = le code postal du client
    * @param $villeclient = la ville du client
    * @param $telephoneclient = le téléphone du client
    * @param $mailcient = l'email du client
    *
    * @author MARCHAND Laëtitia
    * @date 04/10/16
    */
	function __construct() {
		$this->idclient='';
		$this->nomclient='';
		$this->prenomclient='';
		$this->adresseclient='';
		$this->cpclient='';
		$this->villeclient='';
		$this->telephoneclient='';
		$this->MailClient='';
		$this->tab = "client";
		$this->primary = "idclient";
	}


	/**
    * Fonction qui sert à donner la valeur de l'id du client
    * @return $idclient= l'identifiant du client
    *
    * @author MARCHAND Laëtitia
    * @date 04/10/16
    */
  	function getIDClient(){
  		return $this->$idclient;
  	}
	

	/**
    * Fonction qui sert à modifier la valeur de l'id du client
    * @param $var = le nouvel identifiant du client
    *
    * @author MARCHAND Laëtitia
    * @date 04/10/16
    */
	function setIDClient($var){
  		return $this->idclient=$var;
  	}
	
	
	/**
    * Fonction qui sert à donner la valeur de le nom du client
    * @return $nomclient= le nom du client
    *
    * @author MARCHAND Laëtitia
    * @date 04/10/16
    */
  	function getNomClient(){
  		return $this->$nomclient;
  	}
	

	/**
    * Fonction qui sert à modifier la valeur du nom du client
    * @param $var = le nouveau nom du client
    *
    * @author MARCHAND Laëtitia
    * @date 04/10/16
    */
	function setNomClient($var){
  		return $this->nomclient=$var;
  	}
	
	/**
    * Fonction qui sert à donner la valeur de le prénom du client
    * @return $prenomclient= le prénom du client
    *
    * @author MARCHAND Laëtitia
    * @date 04/10/16
    */
  	function getPrenomClient(){
  		return $this->$prenomclient;
  	}
	

	/**
    * Fonction qui sert à modifier la valeur du nom du client
    * @param $var = le nouveau prénom client
    *
    * @author MARCHAND Laëtitia
    * @date 04/10/16
    */
	function setPrenomClient($var){
  		return $this->prenomclient=$var;
  	}
	


	/**
    * Fonction qui sert à donner la valeur de l'adresse du client
    * @return $adresseclient= l'adresse du client
    *
    * @author MARCHAND Laëtitia
    * @date 04/10/16
    */
  	function getAdresseClient(){
  		return $this->$adresseclient;
  	}
	

	/**
    * Fonction qui sert à modifier la valeur de l'adresse du client
    * @param $var = la nouvelle adresse du client
    *
    * @author MARCHAND Laëtitia 
    * @date 04/10/16
    */
	function setAdresseClient($var){
  		return $this->adresseclient=$var;
  	}
	

	/**
    * Fonction qui sert à donner la valeur de le code postal du client
    * @return $cpclient= le code postal du client
    *
    * @author MARCHAND Laëtitia
    * @date 04/10/16
    */
  	function getCPClient(){
  		return $this->$cpclient;
  	}
	

	/**
    * Fonction qui sert à modifier la valeur du code postal du client
    * @param $var = le nouveau code postal du client
    *
    * @author MARCHAND Laëtitia 
    * @date 04/10/16
    */
	function setCPClient($var) {
  		return $this->$cpclient=$var;
  	}
	
	/**
    * Fonction qui sert à donner la valeur de la ville du client
    * @return $villeclient= la ville du client
    *
    * @author MARCHAND Laëtitia
    * @date 04/10/16
    */
  	function getVilleClient(){
  		return $this->$villeclient;
  	}
	

    /**
    * Fonction qui sert à modifier la valeur la ville du client
    * @param $var = le nouveau code postal du client
    *
    * @author MARCHAND Laëtitia 
    * @date 04/10/16
    */
	function setVilleClient($var){
  		return $this->$villeclient=$var;
  	}
	
	
	 /**
    * Fonction qui sert à donner la valeur du numéro de téléphone du client
    * @return $telephoneclient= le numéro de téléphone du client
    *
    * @author MARCHAND Laëtitia
    * @date 04/10/16
    */
  	function getTelephoneClient(){
  		return $this->$telephoneclient;
  	}
	

	/**
    * Fonction qui sert à modifier la valeur du numéro de téléphone du client
    * @param $var = le nouveau numéro de téléphone du client
    *
    * @author MARCHAND Laëtitia 
    * @date 04/10/16
    */
	function setTelephoneClient($var){
  		return $this->$telephoneclient=$var;
  	}
	
	

	/**
    * Fonction qui sert à donner la valeur de l'email du client
    * @return $telephoneclient= l'email du client
    *
    * @author MARCHAND Laëtitia
    * @date 04/10/16
    */
  	function getMailClient(){
  		return $this->$mailclient;
  	}
	

	/**
    * Fonction qui sert à modifier la valeur de l'email du client
    * @param $var = le nouvel email du client
    *
    * @author ¨MARCHAND Laëtitia 
    * @date 04/10/16
    */
	function setMailClient($var){
  		return $this->$mailclient=$var;
  	}	
  	
}
?> 
