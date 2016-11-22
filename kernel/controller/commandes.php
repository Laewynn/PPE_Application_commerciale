<?php
require('Controller.php');
//require(DIR_CORE.'class/classecommande.php');
	class commandes extends Controller {

		//attribs
		var $models = array('commande');

		public function index() {
			$data['commande'] = $this->commande->find();
			$this->set($data);
			$this->render('index');
		}

		public function read($id) {
			$commande = new commande();
			$this->commande->read($id);
			$data['commande'] = $this->commande->totable();
			$this->set($data);
			$this->render('read');
		}

		public function create() {
			$this->commande->setidcommande(1);
			$this->commande->setDateCommande(date('YYYY-MM-DD'));
			$this->commande->setDateLivraison(null);
			$this->commande->setAdresseLivraison($_POST['adresseLivraison']);
			$this->commande->setCPLivraison($_POST['cplivraison']);
			$this->commande->setVilleLivraison($_POST['villelivraison']);
			$this->commande->setFraisDePort('0.5');
			$this->commande->create();
			$this->render('create');
		
		}
		public function fcreate(){
			$this->render('fcreate');
		}
		
		public function fupdate($id){
			$this->commande->read($id);
			$data['commande'] = $this->commande->totable();
			$this->set($data);

			$this->render('fupdate');
		}
		
		public function update($id) {
			$this->commande->setidcommande(1);
			$this->commande->setDateCommande($_POST['datecommande']);
			$this->commande->setDateLivraison($_POST['datelivraison']);
			$this->commande->setAdresseLivraison($_POST['adresseLivraison']);
			$this->commande->setCPLivraison($_POST['cplivraison']);
			$this->commande->setVilleLivraison($_POST['villelivraison']);
			$this->commande->setFraisDePort($_POST['fraisdeport']);
			$this->commande->update();
			$this->render('update');
		}
		public function delete($id){
			$this->commande->read($id);
			$this->commande->delete();
			$this->render('delete');
		}
		
	}
?>