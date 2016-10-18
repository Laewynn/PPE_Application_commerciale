<?php
/**
* Le fichier PHP fait partie du projet Application commericiale
* Il sert à définir la classe Model avec son constructeur
* et ses fonctions génériques
* La classe Model est une classe abstraite 
* @datedernièremodification : 14 octobre 2016
* @since 20 septembre 2016
* @author Gwendoline BOISSON
*/


/**
 * La classe Model est la classe mère du Projet Application Commerciale
 *
 * @author Gwendoline BOISSON
 */
abstract class model {
	protected $default;
	protected $pdo;
	protected $tab;
	protected $primary;
	protected $display;
	protected $arraysys = ['pdo', 'tab', 'arraysys','default','primary','display'];


	/**
	* Fonction qui sert à déclarer le constructeur
	* 
	* @author Gwendoline BOISSON
	* @date 11/10/16
	*/
	public function __construct(){
		$this->default = "";
		$this->pdo = "";
		$this->tab = "";
		$this->primary = "";
		$this->display = "";
		
	}


	/**
    * Fonction qui sert à la connexion de la base de données
    * @param $id = la clé primaire de l'utilisateur 
    * @return $bdd = la base de données 
    *
    * @author Gwendoline BOISSON
    * @date 23/09/16
    **/
	public function connect(){//connection bdd
		$this->pdo = new PDO(MY_SGBD.":host=".MY_HOSTNAME.";dbname=".MY_DATABASE,MY_USERNAME,MY_PASSWORD);
		//$this->pdo = new PDO("pgsql:host=localhost;dbname=bforum","postgres","pgadmin");
		return $this->pdo;

	}


	public function deco(){//deco bdd
		$this->pdo=null;
	}
	
	/**
    * Fonction qui sert créer les lignes de la table génériquement
    * Le C du CRUD 
    * @author Gwendoline BOISSON
    * @date 07/10/16
    */
	//CRUD
	public function created(){
		$this->connect();
		$tab = $this->tab;
		
		$req = "INSERT INTO $tab VALUES (";
		
		$f = true;
		
		foreach($this as $key => $value){
			if ($f){
				$f = false;
				if(!in_array($key, $this->arraysys)){
					$req = $req."".$value."";
				}
			}else {
				if(!in_array($key, $this->arraysys)){
					$req = $req." ,"."'".$value."'";
					
				}
			}
		}
		
		$req = $req. ")";
		
		
		$query = $this->pdo->prepare($req);
		$res = $query->execute();
		
		print_r($req);
	}
	

	 /**
    * Fonction qui sert à lire les lignes de la table génériquement
    * @param $id = la clé primaire de le la table
    *
    * @author Gwendoline BOISSON
    * @date 30/09/16
    */
	public function read($id){
		$this->connect();
		$tab = $this->tab;
		
		
		$req = "Select * From $tab Where {$this->primary} = '$id'";

		//echo $req;
		$query = $this->pdo->prepare($req);
		
		$query->execute();
		$res = $query->fetch(PDO::FETCH_ASSOC);
		
		foreach($res as $key => $val){
			$this->$key = $val;
		}
		//print_r($this);	

	
	}
	

	/**
    * Fonction qui sert à mettre à jour les lignes de la table génériquement
    * 
    * @author Gwendoline BOISSON
    * @date 07/10/16
    */
	public function update(){
		$this->connect();
		$tab = $this->tab;
		
		$req = "UPDATE $tab SET ";
		
		$f = true;
	
		foreach($this as $key => $value){
			if ($f){
				$f = false;
				if(!in_array($key, $this->arraysys)){
					$req = $req.$key." = '".$value."' ";
				}
			}else {
				if(!in_array($key, $this->arraysys)){
					$req = $req.",".$key." = "."'".$value."' ";
				}
			}
		}
		
		$req = $req. "where {$this->primary} = {$this->id}";
		echo $req;
		
		$query = $this->pdo->prepare($req);
		$res = $query->execute();
		
	}
	

	/**
    * Fonction qui supprime les lignes de la table génériquement
    * @param $id = identifiant
    * @author Gwendoline BOISSON
    * @date 07/10/16
    */
	public function delete(){
		$this->connect();
		$tab = $this->tab;
		
		$req = "DELETE FROM $tab WHERE {$this->primary} = '{$this->id}'";
		echo $req;
		$query = $this->pdo->prepare($req);
		$res = $query->execute();
		
	}
	
	/**
    * Fonction qui récupère les lignes de la table génériquement
    * @param $id = identifiant
    * @author Gwendoline BOISSON
    * @date 07/10/16
    */
	public function totable() {
		$nom = get_class($this);
		$tmp = array();
		foreach ($this as $key => $val) {
			$tmp[$key] = $val;
		}
		$data = array();
		$data[$nom] = $tmp;
		return $data;
	}
	

	/**
    * Fonction qui sert à trouver un enregistrement en fonction d'un paramètre génériquement
    * @param $id = la clé primaire de l'utilisateur 
    * @return $result = toutes les valeurs du nom des colonnes de la base
    *
    * @author Gwendoline BOISSON
    * @date 30/09/16
    */
	public function find() {// selection toutes les lignes de la table
		$data = array();
		$sql = "SELECT * FROM {$this->tab} order by {$this->primary}";
		//print_r($sql);
		$this->connect();
		$query = $this->pdo->prepare($sql);
		$query->execute();
		while ($res = $query->fetch(PDO::FETCH_ASSOC)) {
			$data[] = $res;
		}
		return $data;
		$this->deco();
	}
}
?>