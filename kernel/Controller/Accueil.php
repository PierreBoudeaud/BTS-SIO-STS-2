<?php
	require_once(APP."Controller.php");
	class Accueil extends Controller{
		public function __construct(){
			$this->render("Accueil");
		}
	}
?>