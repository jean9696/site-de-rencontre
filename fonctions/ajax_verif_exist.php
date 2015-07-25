<?php

	/* note à moi même : on peut pas mettre des strings en tant que nom de table dans les requetes sinon ca foire !*/
	/*Genre là mettre le typeContent dans le parametre de execute faisait tout foirer */
	include 'connexionBDD.php'; 
	$array = array();
	$req = $bdd->prepare('SELECT pseudo FROM utilisateurs WHERE pseudo = ?');	
	$req->execute(array($_POST['pseudo']));

	$compteur=0;
	while ($donnees=$req->fetch()) {
		$compteur++;
	}

	if($compteur < 1) $array['pseudo'] = false;
	else $array['pseudo'] = true;


	$req = $bdd->prepare('SELECT mail FROM utilisateurs WHERE mail = ?');	
	$req->execute(array($_POST['mail']));

	$compteur=0;
	while ($donnees=$req->fetch()) {
		$compteur++;
	}

	if($compteur < 1) $array['mail'] = false;
	else $array['mail'] = true;

	echo json_encode($array);
?>