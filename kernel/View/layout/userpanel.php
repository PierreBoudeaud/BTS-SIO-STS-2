<?php
	$isConnected=false;
	
	
	
	if ($isConnected){
		$nomUtil_BDD="Laëgoline";
		$imgUtil_BDD="gwentitia.png";
		
		$lienConnexion = "<a id='btn_deconnexionSmall' href='#'>Deconnexion</a>";
	}
	else
	{
		$nomUtil_BDD="Non connecté";
		$imgUtil_BDD="default-user.png";
		
		$lienConnexion = "<a id='btn_connexionSmall' href='#'>Connexion</a>";
	}
	
	
	
	$userpanel= "<img id='imgUtilisateur' src=" . IMG . $imgUtil_BDD . ">"
					. $nomUtil_BDD . "<br/>"
					. $lienConnexion;
	
	
?>