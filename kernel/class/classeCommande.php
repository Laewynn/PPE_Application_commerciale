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
	protected $idcommande;
	protected $datecommande;
	protected $datelivraison;
	protected $adresselivraison;
	protected $cplivraison;
	protected $villelivraison;
	protected $fraisdeport;
  protected $idclient;
 
	/**
	* Fonction qui sert à déclarer le constructeur de la classe Commande
  *
	* @author MARCHAND Laëtitia
	* @date 04/10/16
	*/
	function __construct() {
    parent::__construct('commande', 'idcommande', true); // savoir si le nom de la table est auto-incrémenté
		$this->idcommande='';
		$this->datecommande='';
		$this->datelivraison=NULL;
		$this->adresselivraison='';
		$this->cplivraison='';
		$this->villelivraison='';
		$this->fraisdeport='';
    $this->idclient='';
	}
    
	/**
	* Fonction qui sert à donner la valeur de l'id de la commande
	* @return $idcommande= l'id de la commande
	*
	* @author MARCHAND Laëtitia
	* @date 04/10/16
	*/
	function getidcommande(){
  		return $this->idcommande;
  	}
	

	/**
	* Fonction qui sert à modifier la valeur de l'id de la commande
	* @param $id = le nouvel id de la commande
	*
	* @author MARCHAND Laëtitia 
	* @date 04/10/16
	*/
  	function setidcommande($id){
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
  		return $this->datecommande;
  	}


  	/**
    * Fonction qui sert à modifier la valeur de la date de la commande
    * @param $DateC = la date de la commande
    *
    * @author MARCHAND Laëtitia 
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
  		return $this->datelivraison;
  	}

  	/**
    * Fonction qui sert à modifier la valeur de la date de la livraison pour la commande
    * @param $DateL = la date de la livraison pour la commande
    *
    * @author MARCHAND Laëtitia 
    * @date 04/10/16
    */
  	function setDateLivraison($DateL){
  		 $this->datelivraison=$DateL;
  	}
	


	/**
    * Fonction qui sert à donner la valeur de l'adresse de la livraison pour la commande
    * @return $adresselivraison= adresse de la livraison pour la commande
    *
    * @author MARCHAND Laëtitia
    * @date 04/10/16
    */
  	function getAdresseLivraison(){
  		return $this->adresselivraison;
  	}


  	/**
    * Fonction qui sert à modifier la valeur de l'adresse de la livraison pour la commande
    * @param $adressel = l'adresse de la livraison pour la commande
    *
    * @author MARCHAND Laëtitia 
    * @date 04/10/16
    */
  	function setAdresseLivraison($AdresseL){
  		$this->adresselivraison=$AdresseL;
  	}
	

	/**
    * Fonction qui sert à donner la valeur du code postal de la livraison pour la commande
    * @return $cplivraison= code postal de la livraison pour la commande
    *
    * @author MARCHAND Laëtitia
    * @date 04/10/16
    */
  	function getCPLivraison(){
  		return $this->cplivraison;
  	}
	
  	/**
    * Fonction qui sert à modifier la valeur du code postal de la livraison pour la commande
    * @param $cpl = code postal de la livraison pour la commande
    *
    * @author MARCHAND Laëtitia 
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
    * @author MARCHAND Laëtitia 
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
    * @author MARCHAND Laëtitia 
    * @date 04/10/16
    */
	function setFraisDePort($FraisDP){
	        $this->fraisdeport=$FraisDP;
	 }


    /**
  * Fonction qui sert à donner la valeur de l'id du client
  * @return $idclient= l'id du client
  *
  * @author MARCHAND Laëtitia
  * @date 29/11/16
  */
  function getidclient(){
      return $this->$idclient;
    }
  

  /**
  * Fonction qui sert à modifier la valeur de l'id du client
  * @param $id = le nouvel id du client
  *
  * @author MARCHAND Laëtitia 
  * @date 29/11/16
  */
    function setidclient($id){
      $this->idclient=$id;
    }
}
