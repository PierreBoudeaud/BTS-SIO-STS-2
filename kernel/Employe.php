<?php
	include('Model.php')
	
	class Employe extends Model {
		private $EMP_Matricule;
		private $EMP_Nom;
		private $EMP_Prenom;
		private $EMP_Rue;
		private $EMP_Ville;
		private $EMP_CodePostal;
		private $EMP_Tel;
		private $EMP_Portable;
		private $EMP_Email;
		private $EMP_DateEmbauche;
		private $EMP_Quotite;
		
		//Attributs techniques
		protected $table = 'employe';
		protected $pk = 'EMP_Matricule';
		
		public function __construct($EMP_Matricule, $EMP_Nom, $EMP_Prenom, $EMP_Rue, $EMP_Ville, $EMP_CodePostal, $EMP_Tel, $EMP_Portable, $EMP_Email, $EMP_DateEmbauche, $EMP_Quotite){
			$this->EMP_Matricule = $EMP_Matricule;
			$this->EMP_Nom = $EMP_Nom;
			$this->EMP_Prenom = $EMP_Prenom;
			$this->EMP_Rue = $EMP_Rue;
			$this->EMP_Ville = $EMP_Ville;
			$this->EMP_CodePostal = $EMP_CodePostal;
			$this->EMP_Tel = $EMP_Tel;
			$this->EMP_Portable = $EMP_Portable;
			$this->EMP_Email = $EMP_Email;
			$this->EMP_DateEmbauche = $EMP_DateEmbauche;
			$this->EMP_Quotite = $EMP_Quotite;
			$this->table = 'employe';
			$this->pk = 'EMP_Matricule';
		}
		
		public function setMatricule($EMP_Matricule){
			$this->EMP_Matricule = $EMP_Matricule;
		}
		
		public function getMatricule(){
			return $EMP_Matricule;
		}
		
		public function setNom($EMP_Nom){
			$this->EMP_Nom = $EMP_Nom;
		}
		
		public function getNom(){
			return $EMP_Nom;
		}
		
		public function setPrenom($EMP_Prenom){
			$this->EMP_Prenom = $EMP_Prenom;
		}
		
		public function getPrenom(){
			return $EMP_Prenom;
		}
		
		public function setRue($EMP_Rue){
			$this->EMP_Rue = $EMP_Rue;
		}
		
		public function getRue(){
			return $EMP_Rue;
		}
		
		public function setVille($EMP_Ville){
			$this->EMP_Ville = $EMP_Ville;
		}
		
		public function getVille(){
			return $EMP_Ville;
		}
		
		public function setCodePostal($EMP_CodePostal){
			$this->EMP_CodePostal = $EMP_CodePostal;
		}
		
		public function getCodePostal($EMP_CodePostal){
			return $EMP_CodePostal;
		}
		
		public function setTel ($EMP_Tel){
			$this->EMP_Tel = $EMP_Tel;
		}
		
		public function getTel(){
			return $EMP_Tel;
		}
		
		public function setPortable($EMP_Portable){
			$this->EMP_Portable = $EMP_Portable;
		}
		
		public function getPortable(){
			return $EMP_Portable;
		}
		
		public function setEmail($EMP_Email){
			$this->EMP_Email = $EMP_Email;
		}
		
		public function getEmail(){
			return $EMP_Email
		}
		
		public function setDateEmbauche($EMP_DateEmbauche){
			$this->EMP_DateEmbauche = $EMP_DateEmbauche;
		}
		
		public function getDateEmbauche(){
			return $EMP_DateEmbauche;
		}
		
		public function setQuotite($EMP_Quotite){
			$this->EMP_Quotite = $EMP_Quotite;
		}
		
		public function getQuotite(){
			return $EMP_Quotite;
		}
	}
?>	