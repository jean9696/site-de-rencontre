<?php

	// $_POST['conv'] => tableau avec les id des conv
	// $_POST['vu'] => id de la conv vue
	//$_SESSION['pseudo'] => BEN LE PSEUDO QUOI (de l'utilisateur qu'on s'entende bien) (je l'avais mis en post avant parce que je suis nul)

	session_start();
	include 'connexionBDD.php'; 

	$array = array(); 
	//on récupère l'id parce qu'on l'avait pas avant parce que je suis un flemmard qui a la flemme de tout changer
	$req = $bdd->prepare('SELECT id FROM utilisateurs WHERE pseudo = ?');
	$req->execute(array($_SESSION['pseudo']));
	$donnees = $req->fetch() ;
	$idPseudo = $donnees['id'];

	//pour chaque contact on regarde si y a du nouveau, et si c'est celle qu'on est en train de regarder on la remet à 0
	foreach ($_POST['conv'] as $key => $value) { 
		$req = $bdd->prepare('SELECT interlocuteur1, interlocuteur2, interlocuteur3, interlocuteur4, interlocuteur5 FROM conv WHERE id = ?');	
		$req->execute(array($value));
		$interlocuteurs = $req->fetch();

		switch ($idPseudo) {
			case $interlocuteurs['interlocuteur1']:
				$vu='vu1';
				break;
			case $interlocuteurs['interlocuteur2']:
				$vu='vu2';
				break;
			case $interlocuteurs['interlocuteur3']:
				$vu='vu3';
				break;
			case $interlocuteurs['interlocuteur4']:
				$vu='vu4';
				break;
			case $interlocuteurs['interlocuteur5']:
				$vu='vu5';
				break;
			default:
				$vu='vu1';
				break;
		}

		if($_POST['vu']==$value){
			$req = $bdd->prepare('UPDATE conv SET '.$vu.'=0 WHERE id = ?');	
			$req->execute(array($value));
			$array[$key]['nombre']="0";
		}
		else{
			$req = $bdd->prepare('SELECT '.$vu.' FROM conv WHERE id = ?');	
			$req->execute(array($value));
			$val = $req->fetch();
	
			$array[$key]['nombre'] = $val[$vu];
		}		
		$array[$key]['id']=$value;
	}
	echo json_encode($array);
?>