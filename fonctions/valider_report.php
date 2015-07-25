<?php 
	include 'connexionBDD.php'; 
	$req = $bdd->prepare("INSERT INTO signalements(id,message,utilisateur) VALUES ('',?,?)");	
	$req->execute(array($_POST['message'],$_POST['pseudo']));
	header('Location: ../user/'); 
?>
