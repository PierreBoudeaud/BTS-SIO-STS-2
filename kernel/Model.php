<?php

	abstract class Model{
		protected $table;
		protected $pk;
		protected $attribtech = array('table', 'pk','attribtech');
		
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
			$req2 = "SELECT * FROM {$this->table} WHERE {$this->pk} = $id";
			
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
		
		public function find($condition){
			$sql="SELECT * FROM {$this->table} WHERE $condition";
			//echo $sql;
			$connexion=$this->connexion();
			$sql=$connexion->query($sql);
			$tmp[]="";
			while ($result=$sql->fetch(PDO::FETCH_ASSOC)){;
				$tmp[] = $result;
			}
			return $tmp;
		}
		
		public function create(){
			$req3 = "INSERT INTO {$this->table}(";
			$notFirstComma = 0;
			foreach($this as $cle=>$val){
				if(!in_array($cle,$this->attribtech) && $cle != $this->pk){
					if($notFirstComma > 0){
						$req3 = $req3.", ";
					}
					$req3 = $req3.$cle;
					$notFirstComma++;
				}
			}
			$req3="{$req3}) VALUES(";
			$notFirstComma = 0;
			foreach($this as $cle=>$val){
				if(!in_array($cle,$this->attribtech) && $cle != $this->pk){
					if($notFirstComma > 0){
						$req3 = $req3.", ";
					}
					$notFirstComma++;
					$req3 ="{$req3}'{$val}'";
				}
			}
			$req3 = $req3.")";
			echo "<br/>".$req3."<br/>";
			//$db = $this->connexion();
						
			//$db->execute($req3);
		}
		
		public function update($id){
			$req3 = "UPDATE {$this->table} SET ";
			$notFirstComma = 0;
			foreach($this as $cle=>$val){
				if(!in_array($cle,$this->attribtech) && $cle != $this->pk){
					if($notFirstComma > 0){
						$req3 = $req3.", ";
					}
					$notFirstComma++;
					$req3 =" {$req3}{$cle} = '{$val}'";
				}
			}
			$req3 = $req3." WHERE {$this->pk} = {$id}";
			echo $req3;
			//$db = $this->connexion();
						
			//$db->execute($req3);
		}
	}