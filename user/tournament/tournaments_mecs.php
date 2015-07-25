 <?php  
  //on veut pas que quelqu'un puisse cheat
  if($_SERVER['PHP_SELF']=='/30nuancesdemecs/user/tournaments_mecs.php')   header('Location: ../fonctions/404.php'); 
 ?>
<div class="row">
	 <div class="col-md-8 col-md-offset-2 box" style="margin-top:150px; margin-bottom:500px;">
	 	<div class="titre">Prétendants actuels</div>
	 	</br>

		<p>
			<form action="tournament/valider_pretendants.php" method="POST" accept-charset="utf-8" style="text-align:center;">
				<div class="form-group marital">
		         <label class=" control-label" for="inputbasic">Que voulez-vous demander à vos prétendants ?</label>
		          <div>
		            <input id="question" name="question" class="form-control" placeholder="Veuillez entrer la question à poser" required>
		          </div>
		        </div>
				<button class="btn btn-success" type="submit"> Continuer le tournaments avec ces prétendants</button>
			</form>
			
		</p>
		<div class="alert alert-block alert-danger" style="display:none">Vous n'avez pas assez de prétendants pour continuer</div>

	 	<?php
	 		$req = $bdd->prepare("SELECT pretendants, pretendants2 FROM tournaments WHERE femme = ? AND statut = 1");	
			$req->execute(array($_SESSION['pseudo']));
			$donnees=$req->fetch();
	 		$tab = listeToTab($donnees['pretendants2']);
	 		foreach ($tab as $key => $value) {
	 		
				$req = $bdd->prepare("SELECT pseudo, (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dateDeNaissance)), '%Y')+0) as age, photoProfil FROM utilisateurs WHERE pseudo=?");	
				$req->execute(array($value));

				$donnees=$req->fetch();
				//on verifie quand même que y a pas rien (on sait jamais)
				if($donnees['pseudo']!=''){
									echo '<div class="col-md-4">';
										echo '<div class="col-md-5" style="padding-top:20%">';
											echo '<p>'.$donnees['pseudo'].'</p>';
											echo '<p>'.$donnees['age'].' ans</p>';
											echo '<a href="" data-toggle="modal" data-target="#myModal" class="voirProfil">Voir profil</a>';
										echo '</div>';
										echo '<div class="fiche-profil-img" ><img src="'.$donnees['photoProfil'].'"></div>';
										
									echo '</div>';
				}			
			}
				
		?>
	</div>
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
<script>
	//encore une fois faire un fichier pour 3 lignes c'est chiant
	//juste une condition pour dire si t'as pas de matchs tu peux pas valider
	$('form').submit(function() {
		if($('.fiche-profil-img').length<5) {
			$('.alert.alert-block.alert-danger').show('slow').delay(5000).hide('slow');
			return false;
		}
	});
</script>