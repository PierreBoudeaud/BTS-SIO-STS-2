<?php
	/**
	*	@author BOUDEAUD P
	*	@date 08/11/2016
	*
	*/
	
	define("ROOT", str_replace("index.php", "", $_SERVER['SCRIPT_FILENAME']));//Racine du serveur
	define("WEBROOT", str_replace("index.php", "", $_SERVER['SCRIPT_NAME']));//Racine du projet
	define("MODEL", ROOT."kernel/Model/");//Racine du dossier Model
	define("CONTROLLER", ROOT."kernel/Controller/");//Racine du dossier Controller
	define("VIEW", ROOT."kernel/View/");//Racine du dossier View
	define("APP", ROOT."kernel/");//Racine du dossier kernel (Classes généraliste)
	define("CONF", ROOT."conf/");//Racine du dossier conf
	
	
	echo '<pre>';
		print_r($_SERVER);//Affichage des informations serveur
	echo '</pre>';

	echo ROOT. "<br>".WEBROOT. "<br>".MODEL. "<br>".CONTROLLER. "<br>".VIEW. "<br>".APP. "<br>".CONF; //[TEST] Affichage des CONSTANTES

	?>