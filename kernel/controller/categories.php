<?php
require('Controller.php');
//require(DIR_CORE.'class/classClient.php');
	class categories extends Controller {

		//attribs
		var $models = array('categorie');

		public function index() {
			$data['categories'] = $this->categorie->find();
			$this->set($data);
			$this->render('index');
		}

		public function read($id) {
			$this->categorie->read($id);
			$data['categories'] = $this->categorie->totable();
			$this->set($data);
			$this->render('read');
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