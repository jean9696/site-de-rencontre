<?php 
	session_start();
	include 'connexionBDD.php'; 
	include 'fonctions.php';

	//on crée le tournament et on dit qu'il a passé la premiere étape
	$req = $bdd->prepare('INSERT INTO tournaments (id,femme,pretendants,statut,dateCreation) VALUES (\'\',?,?,1,NOW());');
	$req->execute(array($_SESSION['pseudo'],conv_char($_POST['pretendants'])));
	echo 'tamere';
 ?>