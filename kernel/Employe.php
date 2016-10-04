<?php
	/**
	*		Classe de gestion d'employés
	*		@author LUTAU T
	*		@version 1.0
	*/
	
	include('Model.php');
	
	class Employe extends Model {
		//Attributs métier
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
		
		/**
		*		setMatricule - Modifie le matricule de l'employé
		*
		*		@param String Le nouveau matricule
		*		@date 04/10/2016
		*/
		public function setMatricule($EMP_Matricule){
			$this->EMP_Matricule = $EMP_Matricule;
		}
		
		/**
		*		getMatricule - Renvoie le matricule de l'employé
		*
		*		@return String Le matricule
		*		@date 04/10/2016
		*/
		public function getMatricule(){
			return $EMP_Matricule;
		}
		
		/**
		*		setNom - Modifie le nom de l'employé
		*
		*		@param String Le nouveau nom
		*		@date 04/10/2016
		*/
		public function setNom($EMP_Nom){
			$this->EMP_Nom = $EMP_Nom;
		}
		
		/**
		*		getNom - Renvoie le nom de l'employé
		*
		*		@return String Le nom
		*		@date 04/10/2016
		*/
		public function getNom(){
			return $EMP_Nom;
		}
		
		/**
		*		setPrenom - Modifie le prénom de l'employé
		*
		*		@param String Le nouveau prénom
		*		@date 04/10/2016
		*/
		public function setPrenom($EMP_Prenom){
			$this->EMP_Prenom = $EMP_Prenom;
		}
		
		/**
		*		getPrenom - Renvoie le prénom de l'employé
		*
		*		@return String Le prénom
		*		@date 04/10/2016
		*/
		public function getPrenom(){
			return $EMP_Prenom;
		}
		
		/**
		*		setRue - Modifie le numéro de rue et la rue du domicile de l'employé
		*
		*		@param String Le nouveau prénom
		*		@date 04/10/2016
		*/
		public function setRue($EMP_Rue){
			$this->EMP_Rue = $EMP_Rue;
		}
		
		/**
		*		getCodePostal - Renvoie le numéro de rue et la rue du domicile de l'employé
		*
		*		@return String Le nouveau numéro suivi de la nouvelle rue
		*		@date 04/10/2016
		*/
		public function getRue(){
			return $EMP_Rue;
		}
		
		/**
		*		setVille - Modifie la ville du domicile de l'employé
		*
		*		@param String La nouvelle ville
		*		@date 04/10/2016
		*/
		public function setVille($EMP_Ville){
			$this->EMP_Ville = $EMP_Ville;
		}
		
		/**
		*		getVille - Renvoie la ville du domicile de l'employé
		*
		*		@return String La ville
		*		@date 04/10/2016
		*/
		public function getVille(){
			return $EMP_Ville;
		}
		
		/**
		*		setCodePostal - Modifie le code postal domicile de l'employé
		*
		*		@param String La nouveau code postal
		*		@date 04/10/2016
		*/
		public function setCodePostal($EMP_CodePostal){
			$this->EMP_CodePostal = $EMP_CodePostal;
		}
		
		/**
		*		getCodePostal - Renvoie le code postal du domicile de l'employé
		*
		*		@return String Le code postal
		*		@date 04/10/2016
		*/
		public function getCodePostal($EMP_CodePostal){
			return $EMP_CodePostal;
		}
		
		/**
		*		setTel - Modifie le numéro de téléphone principal de l'employé
		*
		*		@param String La nouveau numéro principal
		*		@date 04/10/2016
		*/
		public function setTel ($EMP_Tel){
			$this->EMP_Tel = $EMP_Tel;
		}
		
		/**
		*		getTel - Renvoie le numéro de téléphone principal de l'employé
		*
		*		@return String Le numéro principal
		*		@date 04/10/2016
		*/
		public function getTel(){
			return $EMP_Tel;
		}
		
		/**
		*		setPortable - Modifie le numéro de téléphone portable de l'employé
		*
		*		@param String La nouveau numéro de portable
		*		@date 04/10/2016
		*/
		public function setPortable($EMP_Portable){
			$this->EMP_Portable = $EMP_Portable;
		}
		
		/**
		*		getPortable - Renvoie le numéro de téléphone portable de l'employé
		*
		*		@return String Le numéro de portable
		*		@date 04/10/2016
		*/
		public function getPortable(){
			return $EMP_Portable;
		}
		
		/**
		*		setEmail - Modifie l'email de l'employé
		*
		*		@param String Le nouvel email
		*		@date 04/10/2016
		*/
		public function setEmail($EMP_Email){
			$this->EMP_Email = $EMP_Email;
		}
		
		/**
		*		getEmail - Renvoie l'email de l'employé
		*
		*		@return String L'email
		*		@date 04/10/2016
		*/
		public function getEmail(){
			return $EMP_Email;
		}
		
		/**
		*		setDateEmbauche - Modifie la date d'embauche de l'employé
		*
		*		@param Date La nouvelle date
		*		@date 04/10/2016
		*/
		public function setDateEmbauche($EMP_DateEmbauche){
			$this->EMP_DateEmbauche = $EMP_DateEmbauche;
		}
		
		/**
		*		getDateEmbauche - Renvoie la date d'embauche de l'employé
		*
		*		@return date La date d'embauche
		*		@date 04/10/2016
		*/
		public function getDateEmbauche(){
			return $EMP_DateEmbauche;
		}
		
		/**
		*		setQuotite - Modifie la quotite de l'employé
		*
		*		@param float La nouvelle quotité
		*		@date 04/10/2016
		*/
		public function setQuotite($EMP_Quotite){
			$this->EMP_Quotite = $EMP_Quotite;
		}
		
		/**
		*		getQuotite - Renvoie la quotité d'un employé
		*
		*		@return float La quotite (décimal à précision 3,2)
		*		@date 04/10/2016
		*/
		public function getQuotite(){
			return $EMP_Quotite;
		}
	}
?>