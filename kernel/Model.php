<?php

	abstract class Model{
		protected $table;
		protected $pk;
		
		public function __construct(){
			$this->table = "";
			$this->pk = "";
		}
		//fonction pour la connexion
		
		/*--A faire par Pierre--*/
		
		
		public function delete($id){
			$req1 = "DELETE FROM {$this->table} WHERE {$this->pk} = $id";
			
			$base = $this->connexion();
			
			$sql = $base->prepare($req1);
			
			$sql->execute();
			//echo $req;
		}
		
		public function read($id){
			$req2 = "SELECT * FROM {$this->table} WHERE {$this->pk}"
		}
	}