<?php
	class Controller{
		
		public function __contruct(/*$model*/){
				//$this->loadmodel($model);
		}
		
		public function loadmodel($model){
			require_once(MODEL.$model.".php");
			$this->$model = new $model();
		}
		
		public function set(){
			
		}
		
		public function render($model){
			
			ob_start();
			include(VIEW.$model.".php");
			$content = ob_get_clean();
			//appel du template
		}
	}
?>