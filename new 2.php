<?php
	require_once("/kernel/Model.php");
	require_once("/kernel/Model/Employes.php");
	
	$emp = new Employes('Agg', "jkghug");
	foreach($emp as $key=>$var){
		echo $key;
	}
?>