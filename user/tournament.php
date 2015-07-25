<?php  
 	if($_SERVER['PHP_SELF']=='/30nuancesdemecs/user/tounrament.php') header('Location: ../fonctions/404.php'); 
		
	if($_SESSION['sexe']=="Femme"){

		$req = $bdd->prepare('SELECT * FROM tournaments WHERE femme=? AND NOT statut=0');	
		$req->execute(array($_SESSION['pseudo']));


		$donnees=$req->fetch();

		switch ($donnees['statut']) {
			case 1:
				include "tournament/tournaments_mecs.php";
				break;
			case 2:
				include "tournament/afficher_reponses.php";
				break;
			
			default:
				$req = $bdd->prepare('SELECT COUNT(*) as nombreTournaments FROM tournaments WHERE femme=? AND statut=0');	
				$req->execute(array($_SESSION['pseudo']));
				$donnees=$req->fetch();
				//si on est pas abonné on va se faire voir, faut s'abonner !
				if($donnees['nombreTournaments']>0 && $_SESSION['statut']=="gratuit") include "abonnement.php";
				else include "tournament/choix_mecs.php";
				break;
		}
		include "tournament/stop_tournament.php";
	}
	else {
		$req = $bdd->prepare('SELECT COUNT(*) as nombreQuestions FROM tournaments  WHERE statut=2 AND pretendants2 LIKE \'%'.$_SESSION['pseudo'].'%\' AND reponses NOT LIKE \'%'.$_SESSION['pseudo'].'%\'');	
		$req->execute();
		$donnees=$req->fetch();
		if($donnees['nombreQuestions']>0) include "tournament/repondre_question.php";		
		include "tournament/homme.php";
	}

?>

<div style="margin-bottom:500px;"></div>