<?php
require('Controller.php');
//require(DIR_CORE.'class/classeLigne_Commande.php');
	class Ligne_Commandes extends Controller {

		//attribs
		var $models = array('Ligne_Commande');

		public function index() {
			$data['Ligne_Commande'] = $this->Ligne_Commande->find();
			$this->set($data);
			$this->render('index');
		}

		public function read($id) {
			$Ligne_Commande = new Ligne_Commande();
			$this->Ligne_Commande->read($id);
			$data['Ligne_Commande'] = $this->Ligne_Commande->totable();
			$this->set($data);
			$this->render('read');
		}

		public function create() {
			$this->Ligne_Commande->setnumerolignecommande(1);
			$this->Ligne_Commande->setqtecommandee($_POST['qtecommandee']);
			$this->Ligne_Commande->settva($_POST['tva']);
			$this->Ligne_Commande->setidcommande($_POST['idcommande']);
			$this->Ligne_Commande->create();
			$this->render('create');
		
		}
		public function fcreate(){
			$this->render('fcreate');
		}
		
		public function fupdate($id){
			$this->Ligne_Commande->read($id);
			$data['Ligne_Commande'] = $this->Ligne_Commande->totable();
			$this->set($data);

			$this->render('fupdate');
		}
		
		public function update($id) {
			$this->Ligne_Commande->setnumerolignecommande(1);
			$this->Ligne_Commande->setqtecommandee($_POST['qtecommandee']);
			$this->Ligne_Commande->settva($_POST['tva']);
			$this->Ligne_Commande->setidcommande($_POST['idcommande']);
			$this->Ligne_Commande->update();
			$this->render('update');
		}
		public function delete($id){
			$this->Ligne_Commande->read($id);
			$this->Ligne_Commande->delete();
			$this->render('delete');
		}
		
	}
?>