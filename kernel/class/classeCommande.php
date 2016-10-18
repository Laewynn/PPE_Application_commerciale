<?php
/**
* Le fichier PHP fait partie du projet Application Commerciale 
* Il sert à définir la classe Commande avec son constructeur
* ses accesseurs et ses mutateurs.
* @datedernièremodification : 27 septembre 2016
* @since 20 septembre 2016
* @author Laëtitia Marchand <laetitiamarchand35@gmail.com>
*/

/**
 * La classe Commmande permet de gérer la table commande du projet Application Commericiale.
 *
 * @author Laëtitia Marchand <laetitiamarchand35@gmail.com>
 */
require_once("classeMere.php");
class Commande extends model{
	private $idcommande;
	private $datecommande;
	private $datelivraison;
	private $adresselivraison;
	private $cplivraison;
	private $villelivraison;
	private $fraisdeport;
 
	/**
	* Fonction qui sert à déclarer le constructeur de la classe Commande
	* @param $idcommande =  l'identifiant de la commande
	* @param $datecommande = la date de la commmande
	* @param $datelivraison = la date de livraison de la commande 
	* @param $adresselivraison = l'adresse de livraison de la commande
	* @param $cplivraison = le code postal de la livraison pour la commande
	* @param $villelivraison = la ville de la livraison pour la commande
	* @param $fraisdeport = les frais de port de la livraison
	*
	* @author MARCHAND Laëtitia
	* @date 04/10/16
	*/
	function __construct($idcommande, $datecommande, $datelivraison, $adresselivraison, $cplivraison, $villelivraison, $fraisdeport) {
		$this->idcommande=$idcommande;
		$this->datecommande=$Date;
		$this->datelivraison=$datelivraison;
		$this->adresselivraison=$adresselivraison;
		$this->cplivraison=$cplivraison;
		$this->villelivraison=$villelivraison;
		$this->fraisdeport=$fraisdeport;
	}
    
	/**
	* Fonction qui sert à donner la valeur de l'id de la commande
	* @return $idcommande= l'id de la commande
	*
	* @author MARCHAND Laëtitia
	* @date 04/10/16
	*/
	function getIDClient(){
  		return $this->$idcommande;
  	}
	

	/**
	* Fonction qui sert à modifier la valeur de l'id de la commande
	* @param $id = le nouvel id de la commande
	*
	* @author ¨MARCHAND Laëtitia 
	* @date 04/10/16
	*/
  	function setIDClient($id){
  		$this->idcommande=$id;
  	}
	

	/**
	* Fonction qui sert à donner la valeur de la date de la commande
	* @return $datecommande= date de la commande
	*
	* @author MARCHAND Laëtitia
	* @date 04/10/16
	*/
  	function getDateCommande(){
  		return $this->$datecommande;
  	}


  	/**
    * Fonction qui sert à modifier la valeur de la date de la commande
    * @param $DateC = la date de la commande
    *
    * @author ¨MARCHAND Laëtitia 
    * @date 04/10/16
    */
  	function setDateCommande($DateC){
  		 $this->datecommande=$DateC;
  	}
	
	/**
    * Fonction qui sert à donner la valeur de la date de la livraison pour la commande
    * @return $datelivraison= date de la livraison pour la commande
    *
    * @author MARCHAND Laëtitia
    * @date 04/10/16
    */
  	function getDateLivraison(){
  		return $this->$datelivraison;
  	}

  	/**
    * Fonction qui sert à modifier la valeur de la date de la livraison pour la commande
    * @param $DateL = la date de la livraison pour la commande
    *
    * @author ¨MARCHAND Laëtitia 
    * @date 04/10/16
    */
  	function setDateLivraison($DateL){
  		 $this->$datelivraison=$DateL;
  	}
	


	/**
    * Fonction qui sert à donner la valeur de l'adresse de la livraison pour la commande
    * @return $adresselivraison= adresse de la livraison pour la commande
    *
    * @author MARCHAND Laëtitia
    * @date 04/10/16
    */
  	function getAdresseLivraison(){
  		return $this->$adresselivraison;
  	}


  	/**
    * Fonction qui sert à modifier la valeur de l'adresse de la livraison pour la commande
    * @param $adressel = l'adresse de la livraison pour la commande
    *
    * @author ¨MARCHAND Laëtitia 
    * @date 04/10/16
    */
  	function setAdresseLivraison($AdresseL){
  		$this->$adresselivraison=$AdresseL;
  	}
	

	/**
    * Fonction qui sert à donner la valeur du code postal de la livraison pour la commande
    * @return $cplivraison= code postal de la livraison pour la commande
    *
    * @author MARCHAND Laëtitia
    * @date 04/10/16
    */
  	function getCPLivraison(){
  		return $this->$cplivraison;
  	}
	
  	/**
    * Fonction qui sert à modifier la valeur du code postal de la livraison pour la commande
    * @param $cpl = code postal de la livraison pour la commande
    *
    * @author ¨MARCHAND Laëtitia 
    * @date 04/10/16
    */
    function setCPLivraison($CPL){
      	$this->cplivraison=$CPL;
    }
	


	/**
    * Fonction qui sert à donner la valeur de la ville de la livraison pour la commande
    * @return $villelivraison= ville de la livraison pour la commande
    *
    * @author MARCHAND Laëtitia
    * @date 04/10/16
    */
	function getVilleLivraison(){
	    return $this->villelivraison;
	}
	
	/**
    * Fonction qui sert à modifier la valeur de la ville de la livraison pour la commande
    * @param $villelr = ville de la livraison pour la commande
    *
    * @author ¨MARCHAND Laëtitia 
    * @date 04/10/16
    */
	function setVilleLivraison($VilleL){
	    $this->villelivraison=$VilleL;
	}
	


	/**
    * Fonction qui sert à donner la valeur des frais de port de la livraison pour la commande
    * @return $fraisdeport= frais de port de la livraison pour la commande
    *
    * @author MARCHAND Laëtitia
    * @date 04/10/16
    */
	function getFraisDePort(){
	        return $this->fraisdeport;
	}
	

	/**
    * Fonction qui sert à modifier la valeur des frais de port de la livraison pour la commande
    * @param $fraisdp = frais de port de la livraison pour la commande
    *
    * @author ¨MARCHAND Laëtitia 
    * @date 04/10/16
    */
	function setFraisDePort($FraisDP){
	        $this->fraisdeport=$FraisDP;
	 }
}
