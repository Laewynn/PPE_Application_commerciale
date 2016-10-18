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
			
		}

		public function create() {
		
		}
		public function fcreate(){

		}
		
		public function fupdate($id){
		
		}
		public function update($id) {
		
		}
		public function delete($id){
		
		}
		
	}
?>