<?php
require('Controller.php');
//require(DIR_CORE.'class/classClient.php');
	class clients extends Controller {

		//attribs
		var $models = array('client');

		public function index() {
			$data['clients'] = $this->client->find();
			$this->set($data);
			$this->render('index');
		}

		public function read($id) {
			$this->client->read($id);
			$data['clients'] = $this->client->totable();
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