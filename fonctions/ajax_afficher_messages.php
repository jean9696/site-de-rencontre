<?php


	include 'connexionBDD.php'; 
	$array = array();
	$req = $bdd->prepare('SELECT message,pseudo,dateEnvoie FROM messages msg, utilisateurs ut WHERE msg.idConv = ? AND ut.id=msg.idExp ORDER BY msg.dateEnvoie ASC');	
	$req->execute(array($_POST['conv']));

	$i=0;
	while($donnees = $req->fetch()){
		$array[$i]['message']=$donnees['message'];
		$array[$i]['pseudo']=$donnees['pseudo'];	
		$array[$i]['dateEnvoie']=$donnees['dateEnvoie'];	
		$i++;	
	} 
	echo json_encode($array);
?>