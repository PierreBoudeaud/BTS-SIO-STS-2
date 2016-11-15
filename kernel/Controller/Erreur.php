<?php
	require_once(APP."Controller.php");
	class Erreur extends Controller{
		public function __construct(){
			parent:__construct();
		}
		
		public function 404(){
			$this->render("404");
		}
	}
?>