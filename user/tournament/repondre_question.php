 <?php  
  //on veut pas que quelqu'un puisse cheat
  if($_SERVER['PHP_SELF']=='/30nuancesdemecs/user/tournament/repondre_question.php') header('Location: ../fonctions/404.php'); 
 ?>
<div class="row">
	 <div class="col-md-8 col-md-offset-2 box" style="margin-top:150px;">
	 	<div class="titre">Elle vous pose sa question</div>
	 	<div class="row">
	 		<?php  
				$req = $bdd->prepare('SELECT ut.pseudo, (DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(ut.dateDeNaissance)), \'%Y\')+0) as age, ut.photoProfil, trnmt.question FROM utilisateurs ut, tournaments trnmt WHERE trnmt.statut=2 AND trnmt.pretendants2 LIKE \'%'.$_SESSION['pseudo'].'%\' AND trnmt.femme = ut.pseudo AND trnmt.reponses NOT LIKE \'%'.$_SESSION['pseudo'].'%\'');	
				$req->execute();
				$question = "";
				while ($donnees=$req->fetch()) {

					echo '<div class="col-md-4 col-md-offset-4">';
						echo '<div class="col-md-5" style="padding-top:20%">';
							echo '<p>'.$donnees['pseudo'].'</p>';
							echo '<p>'.$donnees['age'].' ans</p>';
							echo '<a href="" data-toggle="modal" data-target="#myModal" class="voirProfil">Voir profil</a>';
						echo '</div>';
						echo '<div class="fiche-profil-img" ><img src="'.$donnees['photoProfil'].'"></div>';						
					echo '</div>';
					$question = $donnees['question'];
					$fille = $donnees['pseudo'];
				}				
		?>
		</div>
	 	</hr>
	 	<div class="row" style="padding-bottom:300px">
	 		<form action="tournament/valider_reponse.php" method="POST" accept-charset="utf-8" class="col-md-10 col-md-offset-1" style="text-align:center;">
				<div class="form-group marital">
		         <label class=" control-label" for="inputbasic"><?php echo $question; ?></label>
		          <div>
		            <input name="reponse" class="form-control" placeholder="Veuillez entrer votre réponse" required>
		            <input name="pseudo" value="<?php echo $fille; ?>" class="hidden">
		          </div>
		        </div>
				<button class="btn btn-success" type="submit">Valider</button>
			</form>
	 	</div>
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