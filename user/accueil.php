 <?php  
  //on veut pas que quelqu'un puisse cheat
  if($_SERVER['PHP_SELF']=='/30nuancesdemecs/user/accueil.php')   header('Location: ../fonctions/404.php'); 
 ?>
<div class="row">
	 <div class="col-lg-6 col-lg-offset-3 accueil-user box">
		<h1 class="titre" id="pseudo">Bienvenue <?php echo $_SESSION['pseudo'] ?></h1>
		<div class="contenu">
			<h4>Tu es ici dans le menu, si tu n'as pas de match attends un peu ça va venir, les filles laissent leur chance à tout le monde grâce à 30 nuances de mecs ! Si t'es une fille, ben amuse toi bien !</h4>
			<p>Si tu n'as pas bien compris le principe du site, <a id="jairiencompris" href="" data-toggle="modal" data-target="#myModal">clique ici</a>.</p>
		</div>	
	</div>
</div>

<div class="row" style="margin-bottom: 150px;">
	<div class="col-lg-4 col-lg-offset-1 box">
		<div class="titre" id="pseudo">Matchs</div>
		<div class="contenu">
			<?php  
				// on va chercher les matchs du monsieur avec une requète très compliquée !
				$req = $bdd->prepare('SELECT ut.pseudo, (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(ut.dateDeNaissance)), \'%Y\')+0) as age, ut.photoProfil FROM utilisateurs ut, tournaments trnmts WHERE trnmts.pretendants LIKE \'%'.$_SESSION['pseudo'].'%\' AND trnmts.femme = ut.pseudo');	
				$req->execute();//j'arrive pas à faire passer la variable par là... Mais de toute façon c'est une variable session alros vu qu'il n'y a pas accès y a pas de risque !!

				//on affiche
				$aucunMatch = true;
				while ($donnees=$req->fetch()) {

					echo '<div class="col-md-12">';
						echo '<div class="col-md-6" style="padding-top:10%">';
							echo '<p>'.$donnees['pseudo'].'</p>';
							echo '<p>'.$donnees['age'].' ans</p>';
							echo '<a href="" data-toggle="modal" data-target="#myModal" class="voirProfil">Voir profil</a>';
							echo '<p>
									<button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
									<button class="btn btn-success"><span class="glyphicon glyphicon-heart"></span></button>
								</p>';//oui/non (y a pas de peut etre)
						echo '</div>';
						echo '<div class="fiche-profil-img" ><img src="'.$donnees['photoProfil'].'"></div>';
						
					echo '</div>';
					$aucunMatch = false;
				}
				if($aucunMatch) echo 'Vous n\'avez pas de matchs, revenez plus tard !';
		?>
		</div>	
	</div>



	<?php
		//on récupère l'id parce qu'on l'avait pas avant parce que je suis un flemmard qui a la flemme de tout changer, je pourrais faire une fonction mais j'ai peur que ca fausse tout (excuse nul)
		$req = $bdd->prepare('SELECT id FROM utilisateurs WHERE pseudo = ?');
		$req->execute(array($_SESSION['pseudo']));
		$donnees = $req->fetch() ;
		$idPseudo = $donnees['id'];
		
		//on récupere tous les vus avec l'utilisateur dans la conv on triera plus tard
		$req = $bdd->prepare('SELECT interlocuteur1, interlocuteur2, interlocuteur3, interlocuteur4, interlocuteur5, vu1, vu2, vu3, vu4, vu5 FROM conv WHERE interlocuteur1=:idPseudo OR interlocuteur2=:idPseudo OR interlocuteur3=:idPseudo OR interlocuteur4=:idPseudo OR interlocuteur5=:idPseudo');
		$req->execute(array('idPseudo' => $idPseudo));


		//on trie et on regarde ce qu'on a pas vu...
		$nouveauxMessages = 0;
		while($donnees = $req->fetch()) {
			switch ($idPseudo) {
				case $donnees['interlocuteur1']:
					$nouveauxMessages+= $donnees['vu1'];
					break;
				case $donnees['interlocuteur2']:
					$nouveauxMessages+= $donnees['vu2'];
					break;
				case $donnees['interlocuteur3']:
					$nouveauxMessages+= $donnees['vu3'];
					break;
				case $donnees['interlocuteur4']:
					$nouveauxMessages+= $donnees['vu4'];
					break;
				case $donnees['interlocuteur5']:
					$nouveauxMessages+= $donnees['vu5'];
					break;
				default:
					break;
			}
		}
		//Bon bien sur on l'affiche en dessous...
	?>

	 <div class="col-lg-5 col-lg-offset-1 box">
		<div class="titre" id="pseudo">Messages</div>
		<div class="contenu" style="text-align:center;">
			<?php 
				if($nouveauxMessages>0)	echo '<h4>Vous avez '.$nouveauxMessages.' nouveaux messages</h4>';
				else 	echo '<h4>Vous n\'avez pas de nouveau message </h4>';
			?>
			<p><img src="../images/message.png" style="height:100px;"></p>
			<a onclick="document.getElementById('pageParametre').value='messages';" href="javascript:document.nav.submit()">Voir mes messages</a>	
		</div>	
	</div>
	<?php 
		if($_SESSION['sexe']=="Homme") include "tournament/homme.php" 
	?>
</div>

<!-- Fenetre qui s'ouvre avec le profil et qu'on rempli en AJAX parce qu'on est trop forts-->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Fiche profil</h4>
            </div>
            <div class="modal-body">  
				
            </div>        
          </div>
        </div>
      </div>

<script src="../javascript/profils.js" type="text/javascript"></script>
<script src="../javascript/match.js" type="text/javascript"></script>