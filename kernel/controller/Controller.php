<?php
class Controller {

	var $vars = array();
	var $layout = 'default';

	function __construct(){
		if(isset($_POST)){
			$this->data = $_POST;
		}
		if(isset($this->models)){
			foreach ($this->models as $v) {
				$this->loadModel($v);
			}
		}
	}


	public function loadModel($name){// recupère la class 
		require_once(DIR_MODL.'classe'.strtolower($name).'.php');
		$this->$name = new $name();
	}


	public function set($data){// recupère les données
		$this->vars = array_merge($this->vars, $data);
	}



	public function render($filename){ // recupère la vue
		$view = DIR_VIEW.get_class($this).'/'.$filename.'.tpl';
		if(file_exists($view)){
			extract($this->vars);
			ob_start();
			require($view);
			$content_for_layout = ob_get_clean();
			if($this->layout == false){
				echo $content_for_layout;
			}else {
				if(file_exists(DIR_VIEW.'layout/'.strtolower($this->layout).'.tpl')){
					require_once(DIR_VIEW.'layout/'.strtolower($this->layout).'.tpl');
				}else{
					echo 'Layout "'. $this->layout .'" introuvable.';
				}
			}
		}else{
			echo 'Vue "'. strtolower($filename) .'" introuvable.';
		}
	}
}
?>