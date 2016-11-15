<?php
	class Controller{
		
		
		public __contruct($model){
			/*foreach($model as $){
				$this->loadmodel($model);
			}*/
		}
		
		public loadmodel($model){
			require_once(MODEL.$model.".php");
			$this->$model = new $model();
		}
		
		public set(){
			
		}
		
		public render(){
			
		}
	}
?>