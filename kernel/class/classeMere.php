<?php
abstract class model {
	protected $default;
	protected $pdo;
	protected $tab;
	protected $primary;
	protected $display;
	protected $arraysys = ['pdo', 'tab', 'arraysys','default','primary','display'];


	public function __construct(){
		$this->default = "";
		$this->pdo = "";
		$this->tab = "";
		$this->primary = "";
		$this->display = "";
		
	}

	public function connect(){//connection bdd
		$this->pdo = new PDO(MY_SGBD.":host=".MY_HOSTNAME.";dbname=".MY_DATABASE,MY_USERNAME,MY_PASSWORD);
		//$this->pdo = new PDO("pgsql:host=localhost;dbname=bforum","postgres","pgadmin");
		return $this->pdo;

	}

	public function deco(){//deco bdd
		$this->pdo=null;
	}
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
	
	public function delete(){
		$this->connect();
		$tab = $this->tab;
		
		$req = "DELETE FROM $tab WHERE {$this->primary} = '{$this->id}'";
		echo $req;
		$query = $this->pdo->prepare($req);
		$res = $query->execute();
		
	}
	
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