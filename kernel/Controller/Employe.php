<?php
	require_once(APP."Controller.php");
	class Employe extends Controller{
		
		protected $models;
		
		public function __construct(){
			$this->models = array('Employes');
			parent::__construct($this->models);
		}
		
		public function view($nbvue){
			
			if($this->Employes->read($nbvue)){
				$this->set($this->Employes->toTable());
				$this->render('view');
			}
			
		}
		
		public function list(){
			$this->set($this->Employes->find());
			$this->render('list');
		}
		
		public function new(){
			$this->render('new');
		}
	}
?>