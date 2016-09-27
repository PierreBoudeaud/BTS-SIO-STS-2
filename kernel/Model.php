<?php

	abstract class Model{
		protected $table;
		protected $pk;
		
		public function __construct(){
			$this->table = "";
			$this->pk = "";
		}
		//fonction pour la connexion
	protected function connexion(){
			$host = "localhost";	
			$nomdb = "forum";
			$user ="postgres";
			$mdp = "pgadmin";
			
			try{
				$db = new PDO("pgsql:host=".$host.";dbname=".$nomdb, $user, $mdp);
				echo "<br/>connexion...<br/>";
			}
			catch(PDOException $e){
				echo "ERREUR : ".$e->getMessage()."<br/>";
				die();
			}
			return $db;
		}
		/*--A faire par Pierre--*/
		
		
		public function delete($id){
			$req1 = "DELETE FROM {$this->table} WHERE {$this->pk} = $id";
			
			$base = $this->connexion();
			
			$sql = $base->prepare($req1);
			
			$sql->execute();
			//echo $req;
		}
		
		public function read($id){
			$req2 = "SELECT * FROM {$this->table} WHERE {$this->pk}";
			
			$base = $this->connexion();
			
			//Préparation de la requête pour récupérer les infos
			$tab = $base->prepare($req2);
			
			//Exécution de la requête pour récupérer les infos
			$tab->execute();
			
			//Lecture
			$infos = $tab->fetch(PDO::FETCH_ASSOC);
			//retourne toute la table dans un tableau dans $infos donc print_r pour l'afficher
			
			foreach($infos as $cle=>$val){
				//echo $cle." : ".$val . "<br/>" ;
				$this->$cle = $val;
			}
			//return($infos);
		}
		
		public function update(){
			
		}
		
		public function create(){
			$req3 = "INSERT INTO {$this->$table}
						VALUES (";
						
			foreach($this as $cle=>$val){
				$req3 = $req3.$val.", ";
				
			}
			$req3 = $req3.")";
			
			$db = $this->connexion();
						
			$db->execute($req3);
		}
	}