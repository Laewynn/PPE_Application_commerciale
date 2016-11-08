<?php
require('Controller.php');
//require(DIR_CORE.'class/classClient.php');
	class produits extends Controller {

		//attribs
		var $models = array('produit');

		public function index() {
			$data['produits'] = $this->produit->find();
			$this->set($data);
			$this->render('index');
		}

		public function read($id) {
			$produit = new produit();
			$this->produits->read($id);
			$data['produit'] = $this->produits->totable();
			$this->set($data);
			$this->render('read');
		}

		public function create() {
			$this->produit->setnomproduit($_POST['nomproduit']);
			$this->produit->setdescriptionproduit($_POST['descriptionproduit']);
			$this->produit->setprixunitaireht($_POST['prixunitaireht']);
			$this->produit->settva($_POST['tva']);
			$this->produit->setqteenstock($_POST['qteenstock']);
			$this->produit->setimage($_POST['image']);
		
		}
		public function fcreate(){
			$this->render('fcreate');
		}
		
		public function fupdate($id){
			$this->produit->read($id);
			$data['produit'] = $this->produit->totable();
			$this->set($data);

			$this->render('fupdate');
		}
		
		public function update($id) {
			$this->produit->setid($idproduit);
			$this->produit->setnomproduit($_POST['nomproduit']);
			$this->produit->setdescriptionproduit($_POST['descriptionproduit']);
			$this->produit->setprixunitaireht($_POST['prixunitaireht']);
			$this->produit->settva($_POST['tva']);
			$this->produit->setqteenstock($_POST['qteenstock']);
			$this->produit->setimage($_POST['image']);
			$this->produit->update();
			$this->render('update');
		}
		public function delete($id){
			$this->produit->read($idproduit);
			$this->produit->delete();
			$this->render('delete');
		}
		
	}
?>