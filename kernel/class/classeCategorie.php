<?php
/**
* Le fichier PHP fait partie du projet Application Commerciale 
* Il sert à définir la classe Produit avec son constructeur
* ses accesseurs et ses mutateurs.
* La classe client est la classe mère 
* @datedernièremodification : 11 octobre 2016
* @since 11 octobre 2016
* @author Laëtitia Marchand <laetitiamarchand35@gmail.com>
*/
    /**
	* La classe Categorie permet de gérer la table Categorie du projet Application Commerciale.
	*
	* @author Laëtitia Marchand <laetitiamarchand35@gmail.com>
	*/
	require_once("classeMere.php");
	class Categorie extends model {
		protected $idcategorie;
		protected $libellecategorie;
		protected $tab;
		protected $primary;
		/**
		* Fonction qui sert à déclarer le constructeur de la classe Client
		* 
		* @author MARCHAND Laëtitia
		* @date 11/10/16
		*/
		function __construct(){
			parent::__construct('categorie', 'idpcategorie', true); // savoir si le nom de la table est auto-incrémenté
			$this->idcategorie="";
			$this->libellecategorie="";
			$this->primary="idcategorie";
			$this->tab="Categorie";
		}
			
		/**
		* Fonction qui sert à donner la valeur de l'id de la catégorie
		* @return $idcategorie = l'id de la categorie
		*
		* @author MARCHAND Laëtitia
		* @date 11/10/16
		*/
		function getidcategorie(){
			return $this->idcategorie;
		}
		
			
		/**
		* Fonction qui sert à modifier la valeur de l'id de la catégorie
		* @param $idcategorie = le nouvel de la categorie
		*
		* @author MARCHAND Laëtitia
		* @date 11/10/16
		*/	
		function setidcategorie($idcategorie){
			$this->idcategorie=$idcategorie;
		}
		/**
		* Fonction qui sert à donner la valeur du libellé de la catégorie
		* @return $libellecategorie = le libellé de la catégorie
		*
		* @author MARCHAND Laëtitia
		* @date 11/10/16
		*/
		function getlibellecategorie(){
			return $this->libellecategorie;
		}
		
		
		/**
		* Fonction qui sert à modifier la valeur du libellé de la catégorie
		* @param $libellecategorie = la nouvelle valeur du libellé de la catégorie
		*
		* @author MARCHAND Laëtitia
		* @date 11/10/16
		*/
		function setlibellecategorie($libellecategorie){
			$this->libellecategorie=$libellecategorie;
		}

	}
