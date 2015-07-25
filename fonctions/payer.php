<?php  
	session_start();
	include 'connexionBDD.php'; 
	$_SESSION['statut']='payant';
	$req = $bdd->prepare('UPDATE utilisateurs set statut="payant" WHERE pseudo = ?');	
	$req->execute(array($_SESSION['pseudo']));
	header('Location: ../user/');
?>