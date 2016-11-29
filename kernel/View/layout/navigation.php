<?php

	$menu = array(
		'Accueil'	=> WEBROOT,
		'Employés'	=> WEBROOT.'/employe/list',
		'Factice'	=> '#',
		'Facteur'	=> '#',
		'À propos'	=> '#',
	);
	
	
	
	$navigation= "<ul>";
	
	foreach ($menu as $libelle => $lien){
		$navigation = $navigation
		. "\n <li>	<a href='" . $lien . "'>"
		. $libelle
		. "</a>";
	}
	
	$navigation= $navigation . "</ul>";
?>