<?php

	abstract class Model{
		protected $table;
		protected $pk;
		protected $attribtech = array('table', 'pk','attribtech');
		
		public function __construct(){
			$this->table = "";
			$this->pk = "";
		}
		
		/**
		*		connexion - Connexion à la base de données
		*		Charge les informations de connexion depuis un fichier configuration (.ini)
		*
		*		@return La connexion à la base de donnée
		*		@
		*		@author BOUDEAUD P
		*		@date 30/09/2016
		*/
		protected function connexion(){
			$ini_parse = parse_ini_file("/cfg/bdd.ini");//Fichier de configuration
			$dsn = $ini_parse['type'].":dbname=".$ini_parse['dbName'].";host=".$ini_parse['host'].";port=".$ini_parse['port'];
			try{
				$DB = new PDO($dsn, $ini_parse['pseudo'], $ini_parse['mdp']);
			}catch(PDOException $e){
				echo "Connexion échouée : ".$e->getMessage();
				$DB = null;
			}
			return $DB;
		}
		
		
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