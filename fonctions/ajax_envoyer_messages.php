<?php
	session_start();
	include 'connexionBDD.php'; 
	include 'fonctions.php'; 
	//on récupère l'id parce qu'on l'avait pas avant parce que je suis un flemmard qui a la flemme de tout changer
    $req = $bdd->prepare('SELECT id FROM utilisateurs WHERE pseudo = ?');
    $req->execute(array($_SESSION['pseudo']));
	$donnees = $req->fetch() ;
	$idPseudo = $donnees['id'];

	$req = $bdd->prepare('INSERT INTO messages (id,idExp,dateEnvoie,idConv,message) VALUES (\'\',?,NOW(),?,?);');	
	$req->execute(array($idPseudo,$_POST['conv'],conv_char($_POST['message'])));

	$req = $bdd->prepare('UPDATE conv SET vu1=vu1+1,vu2=vu2+1,vu3=vu3+1,vu4=vu4+1,vu5=vu5+1 WHERE id = ?');
    $req->execute(array($_POST['conv']));

?>