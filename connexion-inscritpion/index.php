<?php  
	include '../fonctions/connexionBDD.php'; 
	include '../fonctions/fonctions.php'; 
	
	session_start();
	if(isset($_SESSION['pseudo'])){
		if($_SESSION['statut']=="admin") header('Location: ../admin/');
		else header('Location: ../user/');
	}
	//la tu vas sur la page de connexion uniquement si le mec a entré de la merde dans ses identifiants, 
	//sinon tu le redirige vers ../user/ donc faut vers la verif bdd avant tout ça (mais ça tu sais déjà)
	elseif(isset($_POST["connexion"])){

		$req = $bdd->prepare('SELECT pseudo,mail,mdp,statut,sexe FROM utilisateurs');	
		$req->execute();
		$exist=false;//on part du principe qu'il est pas dedans
		while ($donnees = $req->fetch()) {//&&&&&&&&&&&MODIF ARTHUR&&&&&&&&&&&&&&
			if($donnees['mail']==conv_char($_POST['mail'])&&$donnees['mdp']==conv_char($_POST['mdp'])) {
				$exist=true;
				$_SESSION['pseudo'] = $donnees['pseudo'];
				$_SESSION['statut'] = $donnees['statut'];
				$_SESSION['sexe'] = $donnees['sexe'];
			}
		}
		$req->closeCursor();


		if($exist){
			if($_SESSION['statut']=="admin") header('Location: ../admin/');
			else header('Location: ../user/');
		} 
		else include "connexion.php";

	} 
	elseif(isset($_POST["inscription"])) include "inscription.php";
	elseif(isset($_POST["inscription-valide"])) include "inscription-valide.php";	
	else header('Location: ../fonctions/404.php');
?>



