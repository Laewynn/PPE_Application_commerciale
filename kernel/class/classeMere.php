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
	protected $arraysys = ['pdo', 'tab', 'arraysys','default','primary','display', 'autoincrement', 'attributech'];
	protected $autoincrement;
	protected $attributech;

	/**
	* doBelongsToAssoc - La fonction doBelongsToAssoc permet d'associer, pour chaque clé etrangère ($fk), la valeur de la clé étrangère dans une variable $id 
	* pour ensuite faire un read sur la table de la clef étrangère permettant ainsi de lister les valeurs de la clef étrangère d'une table
	* 		
	* La fonction est privée car ne doit être vue que par la classe mère elle même
	* Cette fonction est appelée par la classe mère elle même grâce à la fonction read()
	*
	* @Cette fonction est associée à la fonction read($id) de la classe model
	*
	* @author MARCHAND Laëtitia et BOISSON Gwendoline
	* @date 22/11/2016
	*/
	private function doBelongsToAssoc(){
		foreach($this->fk as $cle=>$valeur){
			$id = $this->$valeur;
			$this->$valeur = new $cle();
			$this->$valeur->read($id);
		}
	}


	/**
	* Fonction qui sert à déclarer le constructeur
	* 
	* @author Gwendoline BOISSON
	* @date 11/10/16
	*/
	public function __construct($tab, $primary, $autoincrement){
		$this->default = "";
		$this->pdo = "";
		$this->tab = $tab;
		$this->primary = $primary;
		$this->display = "";
		$this->autoincrement= $autoincrement;
        $this->attributech = array('tab', 'primary','autoincrement','attributech'); // pour ne pas les utilisers les attributs techniques des requêtes
		
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
	public function create(){
		$proprietes="";
		$valeurs="";
		//print_r($this);
		
        /**
        * Insertion dans la requête des noms de colonnes
        * Conditions : - le nom de la colonne ne doit pas faire partie des attributs techniques (ce qu'on as noté dans $attributech)
        *          
        */
        if($this->autoincrement){ // si la clé primaire est en auto-incrément, 
            $this->arraysys []=$this->primary; // ALORS on l'ajoute dans le tableau des attributs techiniques, comme ça , elle ne sera pas ajoutée dans la requête
        }

        foreach($this as $nomColonne=>$valeurColonne){ // Pour chaque ligne dans le tableau
			if (!in_array($nomColonne, $this->arraysys )){ // Si les lignes du nom de la colonne et les attributs techniques ne sont pas dans le tableau
			$proprietes=$proprietes. "$nomColonne ," ;   // pour que toutes les propriétés soit mises côtes à côtes séparées par des virgules   
				if ($valeurColonne != null){                       
                	$valeurs=$valeurs." '$valeurColonne' ," ;    // pour que toutes les valeurs soit mises côtes à côtes séparées par des virgules
            	}else{
            		$valeurs=$valeurs."NULL," ;    // pour que toutes les valeurs soit mises côtes à côtes séparées par des virgules
            	}
            }
        
		}
        echo "Propriétés : $proprietes<br/>";
        echo "Valeurs : $valeurs <br/> <br/>";
        $proprietes = substr($proprietes, 0, -1);
        $valeurs = substr($valeurs, 0, -1);
		
        $sql="INSERT INTO {$this->tab} ($proprietes) VALUES ($valeurs)";

        echo "<br/> Création de la ligne <br/> " . "Requête : " . $sql;
        
        $bdd= $this->connect();
        $bdd->query($sql);
        $bdd = null;
		
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
		$primary = $this->primary;
		$tab = $this->tab;
		$id = $this->$primary;
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
		
		$req = $req. "where {$this->primary} = {$id}";
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
		$primary = $this->primary;
		$id = $this->$primary;

		$req = "DELETE FROM $tab WHERE {$this->primary} = '{$id}'";
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