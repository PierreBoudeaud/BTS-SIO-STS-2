<!DOCTYPE html>

<?php
	include ('\kernel\Employe.php');
			
	$unEmploye = new Employe (1,"","", "");
			
	/*echo "Votre Matricule : ".$unEmploye->getMatricule()."<br/>";
	echo "Votre identité : ".$unEmploye->getNom().$unEmploye->getPrenom()."<br/>";
	echo "Vous habitez : ".$unEmploye->getRue().$unEmploye->getVille().$unEmploye->getCodePostal()."<br/>";
	echo "Votre email : ".$unEmploye->getEmail()."<br/>";
	echo "Vos coordonées telephoniques : "."Fixe : "$unEmploye->getTel()." "."Portable : ".$unEmploye->getPortable()."<br/>";
	echo "Votre ancienneté : ".$unEmploye->getDate()."<br/>";
	echo "Votre quotité : ".$unEmploye->getQuotite().""<br/>;
	
	$unEmploye->create();*/
	
	$infos = $unEmploye->read(3);
	echo "<br/><br/>";
	print_r ($unEmploye);
	$a = $unEmploye->find("pseudoutilisateur = 'Pikachu'");
	print_r($a)
	
	/*echo "<br/>".
	"Matricule : ".
	$infos['EMP_Matricule'].
	"<br/>".
	"Nom : ".
	$infos['EMP_Nom'].
	"<br/>".
	"Email : ".
	$infos['EMP_Email'];*/
	
	//$unEmploye->delete(4);
	
	echo "<br/><br/>";
	$unEmploye->create();
	
	echo "<br/><br/>";
	$unEmploye->update();
?>